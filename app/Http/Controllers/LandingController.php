<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ComunityEconomy;
use App\Models\EducationLevel;
use App\Models\MaterializedView;
use App\Models\Structure;
use App\Models\TransportationMean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Article::where("is_show", "=", 1)->limit(4)->get();

        // Ambil data transportasi
        $transportationData = DB::table('materialized_views')
            ->where('name', 'transportation_means')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });

        // Ambil data pendidikan
        $educationData = DB::table('materialized_views')
            ->where('name', 'education_levels')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });


        // Ambil data pendidikan
        $economyData = DB::table('materialized_views')
            ->where('name', 'comunity_economies')
            ->get()
            ->map(function ($item) {
                return json_decode($item->data, true);
            });

        $villages = $transportationData->pluck('village_name')->toArray();

        // Process transportation data
        $transportationStats = [
            'carCounts' => $transportationData->pluck('car_count')->toArray(),
            'motorcycleCounts' => $transportationData->pluck('motorcycle_count')->toArray(),
            'bentorCounts' => $transportationData->pluck('bentor_count')->toArray(),
            'carOwners' => $transportationData->pluck('car_owner')->toArray(),
            'motorcycleOwners' => $transportationData->pluck('motorcycle_owner')->toArray(),
            'bentorOwners' => $transportationData->pluck('bentor_owner')->toArray(),
        ];

        // Process education data
        // Process education data by gender
        $educationStats = [
            'belumSekolahL' => $educationData->pluck('belum_l')->toArray(),
            'belumSekolahP' => $educationData->pluck('belum_p')->toArray(),
            'tamatSDL' => $educationData->pluck('sd_l')->toArray(),
            'tamatSDP' => $educationData->pluck('sd_p')->toArray(),
            'tamatSMPL' => $educationData->pluck('smp_l')->toArray(),
            'tamatSMPP' => $educationData->pluck('smp_p')->toArray(),
            'tamatSMAL' => $educationData->pluck('sma_l')->toArray(),
            'tamatSMAP' => $educationData->pluck('sma_p')->toArray(),
            'tamatPTL' => $educationData->pluck('pt_l')->toArray(),
            'tamatPTP' => $educationData->pluck('pt_p')->toArray(),
        ];

        // Mengambil data untuk chart
        $economyStats = [
            'pertokoan' => $economyData->pluck('pertokoan_owner')->toArray(),
            'perkiosan' => $economyData->pluck('perkiosan_owner')->toArray(),
            'rm_owner' => $economyData->pluck('rm_owner')->toArray(),
            'perbengkelan' => $economyData->pluck('perbengkelan_owner')->toArray(),
            'mebel' => $economyData->pluck('mebel_owner')->toArray(),
            'pangkalanLPG' => $economyData->pluck('pangkalan_lpg_owner')->toArray(),
            'taylor' => $economyData->pluck('taylor_owner')->toArray(),
            'lainnya' => $economyData->pluck('lainnya_owner')->toArray(),
            'villages' => $economyData->pluck('village_name')->toArray(),
        ];

        return view("pages.landing.index", compact(
            "articles",
            "villages",
            "transportationStats",
            "educationStats",
            "economyStats"
        ));
    }


    public function profile()
    {
        $currentVillageHead = Structure::where("position", "=", "Kepala Desa Menjabat")->limit(1)->get();
        $employees = Structure::whereNotIn('position', ['Kepala Desa Menjabat', 'Kepala Desa Lama'])->get();
        $formerVillageHeads = Structure::where("position", "=", "Kepala Desa Lama")->get();

        return view("pages.landing.profile", [
            'currentVillageHead' => $currentVillageHead,
            'employees' => $employees,
            'formerVillageHeads' => $formerVillageHeads
        ]);
    }

    public function refreshMView(Request $request)
    {
        $token = $request->query('token');
        $secret = env('TOKEN_MV', 'fzrsahi');

        // Token validation
        if (!$token || $token !== $secret) {
            return redirect("/");
        }

        // Truncate existing materialized view
        MaterializedView::truncate();

        // Insert data from education_levels with village_name
        MaterializedView::insertUsing(
            ['name', 'data'],
            EducationLevel::join('villages', 'education_levels.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'education_levels' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "belum_l", belum_l,
                    "belum_p", belum_p,
                    "sd_l", sd_l,
                    "sd_p", sd_p,
                    "smp_l", smp_l,
                    "smp_p", smp_p,
                    "sma_l", sma_l,
                    "sma_p", sma_p,
                    "pt_l", pt_l,
                    "pt_p", pt_p
                ) as data')
                )
        );

        // Insert data from comunity_economies with village_name
        MaterializedView::insertUsing(
            ['name', 'data'],
            ComunityEconomy::join('villages', 'comunity_economies.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'comunity_economies' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "pertokoan_count", pertokoan_count,
                    "pertokoan_owner", pertokoan_owner,
                    "perkiosan_count", perkiosan_count,
                    "perkiosan_owner", perkiosan_owner,
                    "rm_count", rm_count,
                    "rm_owner", rm_owner,
                    "perbengkelan_count", perbengkelan_count,
                    "perbengkelan_owner", perbengkelan_owner,
                    "mebel_count", mebel_count,
                    "mebel_owner", mebel_owner,
                    "pangkalan_lpg_count", pangkalan_lpg_count,
                    "pangkalan_lpg_owner", pangkalan_lpg_owner,
                    "taylor_count", taylor_count,
                    "taylor_owner", taylor_owner,
                    "lainnya_count", lainnya_count,
                    "lainnya_owner", lainnya_owner
                ) as data')
                )
        );

        // Insert data from transportation_means with village_name
        MaterializedView::insertUsing(
            ['name', 'data'],
            TransportationMean::join('villages', 'transportation_means.village_id', '=', 'villages.id')
                ->select(
                    DB::raw("'transportation_means' as name"),
                    DB::raw('JSON_OBJECT(
                    "village_name", villages.village_name,
                    "car_count", car_count,
                    "car_owner", car_owner,
                    "motorcycle_count", motorcycle_count,
                    "motorcycle_owner", motorcycle_owner,
                    "bentor_count", bentor_count,
                    "bentor_owner", bentor_owner
                ) as data')
                )
        );

        return response()->json(['message' => 'Success Refresh MView!']);
    }
}
