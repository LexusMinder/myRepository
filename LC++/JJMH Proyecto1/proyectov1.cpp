//Filename: proyecto1.cpp
//Objetivo: el proyecto 1 consistira en el desarrollo de un juego de gato, dicho juego sera capaz
//de elegir jugadores al azar y llevar contadores de los mismos

//Directivas al procesador
#include <string>
#include <iostream>
#include <cstdlib>
#include <ctime>
#include<iomanip>

using namespace std;

/*int main(){
    int selector = 0;#include<iomanip>
    string nombreJugadorUno;
    string nombreJugadorDos;

    cout<<"Seleccione la opcion del menu: "<<endl;
    cout<<"   1) Iniciar juego"<<endl;
    cout<<"   2) Salir"<<endl;
    cout<<"\nSet>"; //cin>>selector;
    cout<<endl;
    if(selector == 1){
        cout<<"Introduce el nombre del primer jugador: "<<endl;
        getline(cin, nombreJugadorUno);

        cout<<"\nIntroduce el nombre del segundo jugador: "<<endl;
        getline(cin, nombreJugadorDos);

        //selectorJugador(name_player_one, name_player_two);
    }
    return 0;
}*/

int main(){
    string jugador1 = "Jose Julio";
    string jugador2 = "Julio Cesar";
    cout<<"Puntuaciones"<<endl;
    cout<<setw(5)<<jugador1;
    cout<<setw(5)<<jugador2<<"";
    cout<<setw(5)<<"Empates"<<"";
}
