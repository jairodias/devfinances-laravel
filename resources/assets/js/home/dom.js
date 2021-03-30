import utils from '../libs/utils';

export default {
    transactionsContainer: document.querySelector('#data-table tbody'),
    addTransaction(transaction, index) {

        const tr = document.createElement('tr')
        tr.innerHTML = this.innerHTMLTransation(transaction)

        this.transactionsContainer.appendChild(tr)

    },

    innerHTMLTransation(transaction) {

        const CSSclass = transaction.amount > 0 ? 'income' : 'exepense'
        const amount = utils.formatCurrency(transaction.amount)

        const html = `
            <td class="description">${transaction.description}</td>
            <td class="${CSSclass}">${amount}</td>
            <td class="date">${transaction.date}</td>
            <td><img src="{{ asset('assets/minus.svg') }}" alt="Remover Transação"></td>
            `

        return html

    }
}