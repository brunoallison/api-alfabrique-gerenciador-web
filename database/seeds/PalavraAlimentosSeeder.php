<?php

use Illuminate\Database\Seeder;

class PalavraAlimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table('palavras')->insert([
            [
                'categoria_id' => 1,
                'nome' => 'Abacate',
                'letras' => '7',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Brocólis',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Chocolate',
                'letras' => '9',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Alho',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Espinafre',
                'letras' => '9',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Iogurte',
                'letras' => '7',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Atum',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Fruta',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Castanha de Caju',
                'letras' => '14',
                'silabas' => '6',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Gengibre',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Aveia',
                'letras' => '5',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Azeite',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Canela',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Limão',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Ovos',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Cebola',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Cenouras',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Camarão',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Queijo',
                'letras' => '6',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Tomate',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Amêndoas',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Maçã',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Batata',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Leite',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Milho',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Azeitonas',
                'letras' => '9',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Coco',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Banana',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Peru',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Cogumelo',
                'letras' => '8',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Biscoito',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Melão',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Melancia',
                'letras' => '8',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Sardinha',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Kiwi',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Frango',
                'letras' => '6',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Chá',
                'letras' => '3',
                'silabas' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Abacaxi',
                'letras' => '7',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Acerola',
                'letras' => '7',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Amora',
                'letras' => '5',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Berinjela',
                'letras' => '9',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Caju',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Caqui',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Cereja',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Cacau',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Castanha do Pará',
                'letras' => '16',
                'silabas' => '6',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Framboesa',
                'letras' => '9',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Goiaba',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Jabuticaba',
                'letras' => '10',
                'silabas' => '5',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Jaca',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Laranja',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Manga',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Mamão',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Maracujá',
                'letras' => '8',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Mexerica',
                'letras' => '8',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Morango',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pequi',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pêssego',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Uva',
                'letras' => '3',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Açucar',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pão',
                'letras' => '3',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Bolo',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Mel',
                'letras' => '3',
                'silabas' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Ketchup',
                'letras' => '7',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Café',
                'letras' => '4',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Batata Frita',
                'letras' => '11',
                'silabas' => '5',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pizza',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Sorvete',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Macarrão',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Feijão',
                'letras' => '6',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Arroz',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Peixe',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Porco',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Abóbora',
                'letras' => '7',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Ameixa',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Bacalhau',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Bacon',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Carambola',
                'letras' => '9',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Couve',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Damasco',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Empada',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Ervilhas',
                'letras' => '8',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Farinha',
                'letras' => '7',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Fígado',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Hamburger',
                'letras' => '9',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pastel',
                'letras' => '6',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pepino',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pinhão',
                'letras' => '6',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Polvo',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Pudim',
                'letras' => '5',
                'silabas' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Salame',
                'letras' => '6',
                'silabas' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'categoria_id' => 1,
                'nome' => 'Tapioca',
                'letras' => '7',
                'silabas' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
