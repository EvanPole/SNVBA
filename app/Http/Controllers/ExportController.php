<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ExportController extends Controller
{
    public function export()
    {
        $tableData = User::all(); // Fetch all data from the table

        $csvFileName = 'table_data.csv';
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function() use ($tableData) {
            $file = fopen('php://output', 'w');

            // Write CSV headers
            fputcsv($file, array_keys($tableData->first()->toArray()));

            // Write CSV data
            foreach ($tableData as $row) {
                fputcsv($file, $row->toArray());
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}
