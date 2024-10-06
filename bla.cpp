#include <iostream>
using namespace std;

struct Node {
    int data;
    Node *next;
};

int main() {
    Node *HEAD = nullptr;

    return 0;
}

void addFirst(Node *&head, int databaru) {
    Node *nodeBaru = new Node;
    nodeBaru->data = databaru;
    nodeBaru->next = head;
    head = nodeBaru;
}

void addLast(Node *&head, int databaru) {
    Node *nodeBaru = new Node;
    nodeBaru->data = databaru;
    nodeBaru->next = nullptr;
    // jika linked list kosong
    if (head == nullptr){
    head = nodeBaru;
    return;
    }
    // jika tidak, traversal ke node terakhir
    Node *temp = head;
    while (temp->next != nullptr) {
    temp = temp->next;
    }
    temp->next = nodeBaru;
}

void printList(Node *head) {
    if (head == nullptr){
        cout << ">> LinkedList masih kosong <<" << endl;
        return;
    }
    
    while (head != nullptr) {
        cout << head->data << " ";
        head = head->next;
    }
    cout << endl;
}

void updateData(Node *&head) {
    if (head == nullptr){
        cout << "LinkedList masih kosong" << endl;
        return;
    }
    int ubah;
    cout << "Masukan data yang akan diubah : ";
    cin >> ubah;

    Node *temp = head;
    while (temp != nullptr){
        if (temp->data == ubah){
            cout << "Masukan data yang baru : ";
            cin >> temp->data;
            cout << "Data berhasil diubah" << endl;
            return;
        }
        temp = temp->next;
    }
    cout << "Data tidak ditemukan" << endl;
}

void deleteFirst(Node *&head) {
    if (head == nullptr){
        cout << ">> LinkedList masih kosong <<" << endl;
        return;
    }
    Node *temp = head;
    head = head->next;
    delete temp;
}
void deleteLast(Node *&head) {
    if (head == nullptr){
        cout << ">> LinkedList masih kosong <<" << endl;
        return;
    }
    if (head->next == nullptr) {
        delete head;
        head = nullptr;
        return;
    }
    Node *temp = head;
    while (temp->next->next != nullptr){
        temp = temp->next;
    }
    delete temp->next;
    temp->next = nullptr;
}

int isEmpty(Node *&head){
    if(head == nullptr) {
        return 1;
    } else {
        return 0;
    }
}