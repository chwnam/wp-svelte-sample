import {add, subtract, multiply, divide} from './modules/utils'

const a = 32, b = 4

console.log(
    add(a, b),
    subtract(a, b),
    multiply(a, b),
    divide(a, b)
)

if (import.meta.hot) {
    import.meta.hot.accept()
}
