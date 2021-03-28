<div class="modal-overlay active">
    <div class="modal">
        <div id="form">
            <h2>Nova Transação</h2>
            <form action="">
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
                    <label class="sr-only" for="amount">Valor</label>
                    <input
                        type="number"
                        id="amount"
                        name="amount"
                        placeholder="0,00"
                    />
                    <small class="help">Use o sinal - (negativo) paara despesas e, (vígula) para casas decimais</small>
                </div>

                <div class="input-group">
                    <label class="sr-only" for="date">Data</label>
                    <input
                        type="date"
                        id="date"
                        name="date"
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