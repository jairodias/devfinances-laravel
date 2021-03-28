@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="balance">
            <h2>Balanço</h2>

            <div class="card">
                <h3>Entradas</h3>
                <p>R$ 5.000,00</p>
            </div>
            <div class="card">
                <h3>Saídas</h3>
                <p>R$ 2.000,00</p>
            </div>

            <div class="card total">
                <h3>Total</h3>
                <p>R$ 3.000,00</p>
            </div>

        </section>

        <section id="transaction">
            <h2>Transações</h2>

            <table id="data-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="description">Luz</td>
                        <td class="expense">- R$ 500,00</td>
                        <td class="date">23/01/2021</td>
                    </tr>

                    <tr>
                        <td class="description">Website</td>
                        <td class="income">- R$ 5.000,00</td>
                        <td class="date">23/01/2021</td>
                    </tr>

                    <tr>
                        <td class="description">Internet</td>
                        <td class="expense">- R$ 500,00</td>
                        <td class="date">23/01/2021</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection
