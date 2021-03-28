@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="balance">
            <h2 class="sr-only">Balanço</h2>

            <div class="card">
                <h3>
                    <span>Entradas</span>
                    <img src="{{ asset('assets/income.svg')}}" alt="Imagem de entradas">
                </h3>
                <p>R$ 5.000,00</p>
            </div>
            <div class="card">
                <h3>
                    <span>Saídas</span>
                    <img src="{{ asset('assets/expense.svg')}}" alt="Imagem de entradas">
                </h3>
                <p>R$ 2.000,00</p>
            </div>

            <div class="card total">
                <h3>
                    <span>Total</span>
                    <img src="{{ asset('assets/total.svg')}}" alt="Imagem de entradas">
                </h3>
                <p>R$ 3.000,00</p>
            </div>

        </section>

        <section id="transaction">
            <h2 class="sr-only">Transações</h2>

            <a href="#" class="button new">
                + Nova Transação
            </a>

            <table id="data-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="description">Luz</td>
                        <td class="expense">- R$ 500,00</td>
                        <td class="date">23/01/2021</td>
                        <td>
                            <img src="{{ asset('assets/minus.svg') }}" alt="Remover Transação">
                        </td>
                    </tr>

                    <tr>
                        <td class="description">Website</td>
                        <td class="income">- R$ 5.000,00</td>
                        <td class="date">23/01/2021</td>
                        <td>
                            <img src="{{ asset('assets/minus.svg') }}" alt="Remover Transação">
                        </td>
                    </tr>

                    <tr>
                        <td class="description">Internet</td>
                        <td class="expense">- R$ 500,00</td>
                        <td class="date">23/01/2021</td>
                        <td>
                            <img src="{{ asset('assets/minus.svg') }}" alt="Remover Transação">
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection
