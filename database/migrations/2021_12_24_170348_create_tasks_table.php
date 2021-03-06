<?php

use App\Models\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('status')->default(Task::NOT_STARTED);
            $table->string('description')->nullable();
            $table->foreignId('todo_list_id')->constrained()->onDelete('cascade');
            $table->foreignId('label_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
