import Transactions from './transaction';
import DOM from './dom'

export default {
    init() {
        Transactions.transactions.forEach(transaction => {
            DOM.addTransaction(transaction)
        })

        DOM.updateBalance()
    },

    reload() {
        DOM.clearTransactions()
        this.init()
    }
}