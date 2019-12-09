<?php

use Illuminate\Database\Seeder;
use App\Servico;

class servicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Servico();
        
        $s->nome = 'Passear com Cachorro';
        $s->descricao = 'Tenho um labrador de 50kg ele ama correr e morder o dono';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 2;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Regar Jardim';
        $s->descricao = 'Vou viajar preciso de alguém para regar o jardim de casa';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 2;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Pintar Parede';
        $s->descricao = 'Tenho que pintar a parede do meu quarto, preciso de ajuda';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 2;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Fazer almoço';
        $s->descricao = 'Vou receber amigos em casa preciso de ajuda para fazer um almoço para 10 pessoas';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 1;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Passear com Pug';
        $s->descricao = 'Quebrei o pé, preciso de alguém para passear com meu cahcorro';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 1;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();

        $s = new Servico();
        
        $s->nome = 'Desmontar armário';
        $s->descricao = 'Preciso desmontar um armário e preciso de ajuda';
        $s->CEP = '01307-000';
        $s->endereco = 'Rua Frei Caneca';
        $s->numero = '444';
        $s->bairro = 'Consoloção';
        $s->cidade = 'São Paulo';
        $s->complemento = 'Ap 64';
        $s->horaInicial = '2019-10-09 11:20:00';
        $s->horaFinal = '2019-10-09 12:20:00';
        $s->id_dono = 1;
        $s->status = 1;
        $s->avaliacao = 'teste';
        $s->pagamento = "1";
        $s->id_prestador = null;

        $s->save();
    }
}
