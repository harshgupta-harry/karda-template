class Node 
{ 
    public:
    int data; 
    Node* next; 
    Node* prev; 
}; 



void delete(Node** head_ref, Node* del) 
{ 
    
    if (*head_ref == NULL || del == NULL) 
        return; 
    if (*head_ref == del) 
        *head_ref = del->next; 
  if (del->next != NULL) 
    del->next->prev = del->prev; 
 
    
    if (del->prev != NULL) 
        del->prev->next = del->next; 
    free(del); 
    return; 
}