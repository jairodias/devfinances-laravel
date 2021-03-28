@extends('layouts.app')

@section('content')
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

    <div class="card">
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
                <td>Luz</td>
                <td>- R$ 500,00</td>
                <td>23/01/2021</td>
            </tr>

            <tr>
                <td>Website</td>
                <td>- R$ 5.000,00</td>
                <td>23/01/2021</td>
            </tr>

            <tr>
                <td>Internet</td>
                <td>- R$ 500,00</td>
                <td>23/01/2021</td>
            </tr>
        </tbody>
    </table>
    </section>
@endsection
