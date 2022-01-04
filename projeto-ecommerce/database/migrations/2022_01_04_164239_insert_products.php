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

        $prod2 = new \App\Models\Produto(['nome' => 'Sapato Frente aberta', 'valor' => 89,90, 'foto' => 'imagens/02.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod2 = save();

        $prod3 = new \App\Models\Produto(['nome' => 'Sapato Bocassim', 'valor' => 75,99, 'foto' => 'imagens/3.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod3 = save();

        $prod4 = new \App\Models\Produto(['nome' => 'Sapato Salto Baixo Fino Raro', 'valor' => 149,90 , 'foto' => 'imagens/04.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod4 = save();

        $prod5 = new \App\Models\Produto(['nome' => 'Salto Eférna', 'valor' => 89,90 , 'foto' => 'imagens/05.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod5 = save();

        $prod6 = new \App\Models\Produto(['nome' => 'Tenis Feminino Branco', 'valor' => 269,90 , 'foto' => 'imagens/6.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod6 = save();

        $prod7 = new \App\Models\Produto(['nome' => 'Rasteira Abacaxi', 'valor' => 169,90 , 'foto' => 'imagens/08.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod7 = save();

        $prod8 = new \App\Models\Produto(['nome' => 'Sapato Fivela', 'valor' => 59,90, 'foto' => 'imagens/10.jpg.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod8 = save();

        $prod9 = new \App\Models\Produto(['nome' => 'Sapato Salto Alto Preto', 'valor' => 139,90 , 'foto' => 'imagens/13.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod9 = save();

        $prod10 = new \App\Models\Produto(['nome' => 'Sapato Baixo Branco', 'valor' => 99,90, 'foto' => 'imagens/15.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod10 = save();

        $prod11 = new \App\Models\Produto(['nome' => 'Sapato Frente aberta Bege', 'valor' => 69,90, 'foto' => 'imagens/14.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod11 = save();

        $prod12 = new \App\Models\Produto(['nome' => 'Sapato Alto Preto', 'valor' => 169,90, 'foto' => 'imagens/12.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod12 = save();

        $prod13 = new \App\Models\Produto(['nome' => 'Tenis Amarração Branco', 'valor' => 349,90 , 'foto' => 'imagens/16.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod13 = save();

        $prod14 = new \App\Models\Produto(['nome' => 'Sandalia Amarração Amarela', 'valor' => 199,90 , 'foto' => 'imagens/17.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod14 = save();

        $prod15 = new \App\Models\Produto(['nome' => 'Sapato Alto Bloco Marrom', 'valor' => 99,90 , 'foto' => 'imagens/20.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod15 = save();

        $prod16 = new \App\Models\Produto(['nome' => 'Sapato Alto Pata Aberta', 'valor' => 39,90 , 'foto' => 'imagens/21.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod16 = save();

        $prod17 = new \App\Models\Produto(['nome' => 'Sapato Salto Alto Bege', 'valor' => 129,90 , 'foto' => 'imagens/22.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod17 = save();

        $prod18 = new \App\Models\Produto(['nome' => 'Salto Fino Preto', 'valor' => 289,90 , 'foto' => 'imagens/23.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod18 = save();

        $prod19 = new \App\Models\Produto(['nome' => 'Bota Tratorada', 'valor' => 359,90 , 'foto' => 'imagens/24.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod19 = save();

        $prod20 = new \App\Models\Produto(['nome' => 'Bota Calcanhar', 'valor' => 139,90 , 'foto' => 'imagens/25.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod20 = save();

        $prod21 = new \App\Models\Produto(['nome' => 'Bota Neon', 'valor' => 279,90 , 'foto' => 'imagens/26.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod21 = save();

        $prod22 = new \App\Models\Produto(['nome' => 'Bota Fivela', 'valor' => 279,90 , 'foto' => 'imagens/27.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod22 = save();



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
