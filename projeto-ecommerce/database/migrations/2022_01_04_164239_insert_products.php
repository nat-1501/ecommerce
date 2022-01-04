<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' -> 'Geral']);
        $cat->save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod2 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod2 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();

        $prod1 = new \App\Models\Produto(['nome' => 'Sapato Mocassim', 'valor' => 69,90, 'foto' => 'imagens/01.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod1 = save();
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
