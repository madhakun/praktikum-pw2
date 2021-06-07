<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Permission;

class MenambahkanPermissionUntukBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $index_bertia = Permission::create([
            'name'=>'index-berita',
            'display_name'=>'Index Berita',
            'description'=>'Melihat isi berita di halaman admin/backend'
        ]);
        $detail_bertia = Permission::create([
            'name'=>'detail-berita',
            'display_name'=>'Detail Berita',
            'description'=>'Melihat Detail berita di halaman admin/backend'
        ]);
        $hapus_bertia = Permission::create([
            'name'=>'hapus-berita',
            'display_name'=>'Hapus Berita',
            'description'=>'Menghapus berita di halaman admin/backend'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
