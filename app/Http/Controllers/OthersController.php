<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class OthersController extends Controller
{
    public function migrateFreshSeed()
    {
        Artisan::call('migrate:fresh --seed');
        notify()->success('Database migration has been completed successfully.');
        return redirect('login');
    }

    public function optimizeClear()
    {
        Artisan::call('optimize:clear');
        notify()->success('Cache has been cleared successfully.');
        return redirect()->back();
    }

    public function composerUpdate()
    {
        exec('composer update');
        exec('composer dump-autoload');
        notify()->success('Composer update has been completed successfully.');
        return redirect()->back();
    }

    public function makeSeed()
    {
        $tables = DB::select('SHOW TABLES');
        $prevent_tables = [
            'cache',
            'cache_locks',
            'failed_jobs',
            'jobs',
            'job_batches',
            'migrations',
            'password_reset_tokens',
            'personal_access_tokens',
            'sessions',
        ];
        foreach ($tables as $table) {
            $table_name = 'Tables_in_' . env('DB_DATABASE');
            $table_name = $table->$table_name;
            if (!in_array($table_name, $prevent_tables))
                Artisan::call('iseed ' . $table_name . ' --force');
        }
        notify()->success('Database seed has been created successfully.');
        return redirect()->route('dashboard');
    }
}
