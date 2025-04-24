<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'title')) {
                $table->string('title')->after('id');
            }
            
            if (!Schema::hasColumn('pages', 'slug')) {
                $table->string('slug')->after('title');
            }
        });
    
        Schema::table('pages', function (Blueprint $table) {
            $table->unique('slug');
        });
    
        // Заполняем существующие записи
        if (Schema::hasTable('pages')) {
            \DB::table('pages')->whereNull('title')->update(['title' => 'Default Title']);
            \DB::table('pages')->whereNull('slug')->update(['slug' => \DB::raw('CONCAT("page-", id)')]);
        }
    }
    
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn(['slug', 'title']);
        });
    }
};
