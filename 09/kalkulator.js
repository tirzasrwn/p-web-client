function kalkulatorMini() {
    var n1 = parseFloat(document.getElementById('n1').value);
    var n2 = parseFloat(document.getElementById('n2').value);
    var operator = document.getElementById('operators').value;
    var result;

    switch (operator) {
        case '+':
            result = n1 + n2;
            break;
        case '-':
            result = n1 - n2;
            break;
        case '*':
            result = n1 * n2;
            break;
        case '/':
            if (n2 === 0) {
                alert("Error: Division by zero");
                return;
            }
            result = n1 / n2;
            break;
        default:
            alert("Invalid operator");
            return;
    }

    document.getElementById('result').value = result;
}
