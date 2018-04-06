<?php namespace Hd321kbps\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('hd321kbps_blog_posts', function(Blueprint $table) {
            Schema::dropIfExists('hd321kbps_blog_posts');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hd321kbps_blog_posts');
    }
}
