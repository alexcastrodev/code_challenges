#include <stdio.h>

int get_roman_value(char character) {
  switch (character) {
    case 'X':
      return 10;
    case 'L':
      return 50;
    default:
      return 0;
  }
}

int calc_roman(char letters[], int size) {
  int result = get_roman_value(letters[0]);
  char last_letter = letters[0];

  for(int i = 1; i <= size; i++) {
    result += get_roman_value(letters[i]);

    if(get_roman_value(last_letter) < get_roman_value(letters[i])) {
      result -= get_roman_value(last_letter);
    }
  }

  return result;
}

int main() {
  char letters[] = {'X', 'X', 'L'};
  int size = sizeof(letters);
  printf("total is %d", calc_roman(letters, size));

  return 0;
}
