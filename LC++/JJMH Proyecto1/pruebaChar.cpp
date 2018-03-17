#include <iostream>
#include <string>

using namespace std;

int main(){
    char cadena[5];
    string str;

    cout<<"Instruccion: "; cin.get(cadena, 5);

    for(int i = 0; i < 5; i++){
        str = cadena[i];
    }

    cout<<str<<endl;

    return 0;
}
