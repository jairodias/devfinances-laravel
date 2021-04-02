import App from './app'

export default {

    transactions: [],

    add(transaction) {
        this.transactions.push(transaction)

        App.reload()
    },

    incomes() {
        let income = 0

        this.transactions.forEach(transaction => {
            income += (transaction.amount > 0) ? transaction.amount : 0
        })

        return income
    },

    expenses() {
        let expense = 0

        this.transactions.forEach(transaction => {
            expense += (transaction.amount < 0) ? transaction.amount : 0
        })

        return expense
    },

    total() {
        return this.incomes() + this.expenses()
    }
}