export default {
    formatCurrency(value) {
        const signal = Number(value) < 0 ? "-" : ""

        value = String(value).replace(/\D/g, "")

        return signal + (Number(value)/100).toLocaleString("pt-BR", {
            style: "currency",
            currency: "BRL"
        })
    }
}