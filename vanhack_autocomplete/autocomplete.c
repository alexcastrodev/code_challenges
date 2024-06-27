#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char *words[] = {"dog", "dollar", "dot", "cat", "drag", "drain"};

struct WordNode
{
  char c;
  int end;
  int count;
  struct WordNode **nodes;
};

struct WordNode *createNode(char c)
{
  struct WordNode *node = (struct WordNode *)malloc(sizeof(struct WordNode));

  node->end = 0;
  node->c = c;
  node->nodes = NULL;
  node->count = 0;

  return node;
}

void addNode(struct WordNode *parent, char c)
{
  parent->count++;
  parent->nodes = (struct WordNode **)realloc(parent->nodes, sizeof(struct WordNode *) * parent->count);
  parent->nodes[parent->count - 1] = createNode(c);
}

void insertNode(struct WordNode *root, char c)
{
  if (root->nodes == NULL)
  {
    root->nodes = (struct WordNode **)createNode(c);
  }
  else
  {
  }
}

void printTree(struct WordNode *root)
{
  printf("%c", root->c);

  for (int i = 0; i < root->count; i++)
  {
    printTree(root->nodes[i]);
    printf("\n");
  }
}

int main(void)
{
  struct WordNode *root = createNode('\0');
  int siz = sizeof(words) / sizeof(words[0]);
  for (int i = 0; i < siz; i++)
  {
    size_t word_size = strlen(words[i]);

    for (size_t j = 0; j < word_size; j++)
    {
      addNode(root, words[i][j]);
    }
  }

  printTree(root);
  return 0;
}
