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
                <p id="incomeDisplay">R$ {{ $incomes }}</p>
            </div>
            <div class="card">
                <h3>
                    <span>Saídas</span>
                    <img src="{{ asset('assets/expense.svg')}}" alt="Imagem de entradas">
                </h3>
                <p id="expenseDisplay">R$ {{ $expenses }}</p>
            </div>

            <div class="card total">
                <h3>
                    <span>Total</span>
                    <img src="{{ asset('assets/total.svg')}}" alt="Imagem de entradas">
                </h3>
                <p id="totalDisplay">{{ $total }}</p>
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
                    @foreach($transactions as $transaction)
                        <tr>
                            <td class="description">Luz</td>
                            @if($transaction->movement < 0)
                                <td class="expense">{{ $transaction->movementFormatted }}</td>
                            @else
                                <td class="income">{{ $transaction->movementFormatted }}</td>
                            @endif
                            <td class="date">23/01/2021</td>
                            <td>
                                <a href="{{ route('transaction.remove', ['transaction' => $transaction->id ])}}">
                                    <img src="{{ asset('assets/minus.svg') }}" alt="Remover Transação">
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
    </div>
@endsection
