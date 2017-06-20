<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table(
            'meetings',
            function (Blueprint $table) {
                $table
                    ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            }
        );
        Schema::table(
            'feedback',
            function (Blueprint $table) {
                $table
                    ->foreign('emotion_id')
                    ->references('id')
                    ->on('emotions')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            }
        );
        Schema::table(
            'feedback',
            function (Blueprint $table) {
                $table
                    ->foreign('meeting_id')
                    ->references('id')
                    ->on('meetings')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            }
        );
        Schema::table(
            'feedback',
            function (Blueprint $table) {
                $table
                    ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            }
        );
    }

    public function down()
    {
        Schema::table(
            'meetings',
            function (Blueprint $table) {
                $table->dropForeign('meetings_user_id_foreign');
            }
        );
        Schema::table(
            'feedback',
            function (Blueprint $table) {
                $table->dropForeign('feedback_emotion_id_foreign');
            }
        );
        Schema::table(
            'feedback',
            function (Blueprint $table) {
                $table->dropForeign('feedback_meeting_id_foreign');
            }
        );
        Schema::table(
            'feedback',
            function (Blueprint $table) {
                $table->dropForeign('feedback_user_id_foreign');
            }
        );
    }
}