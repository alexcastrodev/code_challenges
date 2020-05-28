String fizzBuzz(int n) {
    String r;
    r = n % 3 == 0 ? 'Fizz' : n.toString();
    r = n % 5 == 0 ? 'Buzz' : r;
    r = n % 3 == 0 && n % 5 ==0 ? 'FizzBuzz' : r;
    return r;
}

void main() {
    const n = 10;
    int x = 1;
    List arr = List.generate(n, (_) => x++);
    arr.forEach((element) {
      print(fizzBuzz(element));
    });
}
