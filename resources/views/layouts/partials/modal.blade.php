<div class="modal-overlay">
    <div class="modal">
        <div id="form">
            <h2>Nova Transação</h2>
            <form action="{{ route('transaction.create') }}" method="POST">
                @csrf

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="input-group">
                    <label class="sr-only" for="description">Descrição</label>
                    <input
                        type="text"
                        id="description"
                        name="description"
                        placeholder="Descrição"
                    />
                </div>

                <div class="input-group">
                    <label class="sr-only" for="movement">Valor</label>
                    <input
                        type="number"
                        id="movement"
                        name="movement"
                        placeholder="0,00"
                    />
                    <small class="help">Use o sinal - (negativo) paara despesas e, (vígula) para casas decimais</small>
                </div>

                <div class="input-group">
                    <label class="sr-only" for="created_at">Data</label>
                    <input
                        type="date"
                        id="created_at"
                        name="created_at"
                    />
                </div>

                <div class="input-group actions">
                    <a href="#" class="button cancel">Cancelar</a>

                    <button>Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>