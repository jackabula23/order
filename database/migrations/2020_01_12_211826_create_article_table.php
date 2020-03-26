<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->engine='MyISAM';
            $table->increments('art_id');
            $table->string('art_title')->varchar(100)->default('')->comment('文章標題');
            $table->string('art_tag')->varchar(100)->default('')->comment('關鍵字');
            $table->string('art_description')->varchar(255)->default('')->comment('描述');
            $table->string('art_thumb')->varchar(255)->default('')->comment('縮圖');
            $table->string('art_content')->text()->default('')->comment('文章內容');
            $table->string('art_time')->int(11)->comment('發布時間');
            $table->string('art_editor')->varchar(50)->default('')->comment('作者');
            $table->string('art_view')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
