//Filename: Prcatica2.ccp
//El objetivo de este programa es simular el juego tradcional del gato, ademas de seleccionar un persona azar
//para empezar a jugar y imprimir la cantidad de veces que una persona fue elegida

//Directivas al procesador
#include <iostream>
#include <string>
#include <cstdlib>
#include<ctime>

/*Como comentario yo no declare el arreglo dentro de la funcion main ya que main no se me
hizo necesaria ponerla dentro de este, simplemente llame un metodo que la crea en su cuerpo.*/


using namespace std; //Nos permite usar el espacio de nombres std::

//Este metodo comprueba la dimension del arreglo y regresa un varibale tipo booleano
bool comprobarDim(int fila, int col){
    bool estado = false;
    if((fila>=0 && fila <= 2)&&(col>=0 && col<=2)){//Valida la dimension del arreglo
        cout<<"Magnitudes correctas."<<endl;
        estado = true;
    }else{
        cout<<"Magnitudes incorrectas. Vuleva a intetarlo."<<endl;
        estado = false;
    }
    return estado;
}

//Empieza el juego del gato
void empezarJugar(string primer_jugador, string segundo_jugador){
    const int tam = 3;
    char gato[tam][tam] = {{' ', ' ', ' '}, {' ', ' ', ' '}, {' ', ' ', ' '}};
    int fila = 0;
    int col = 0;
    int numero_veces = 9;
    bool start = false;
    int detener = 1;
    int numerox = 0;

    while(numero_veces >= 0 && detener != 0){//Empieza el juego
        while(numerox == 0){//Empieza el jugador uno con 'x'
            cout<<"\nTurno de primer jugador "<<primer_jugador<<endl;
            cout<<"Fila: "; cin>>fila;
            cout<<"Columna: "; cin>>col;
            start = comprobarDim(fila, col);
            if(start == true){//Valida los valores del arreglo
                if(gato[fila][col] == ' '){
                    cout<<"Espacio disponible."<<endl;
                    start = true;
                }else{
                    cout<<"Espacio no disponible. Intente nuevamente."<<endl;
                    start = false;
                }
            }
            if(start == true){
                gato[fila][col] = 'x';
                cout<<"Respuesta escrita\n";
                numerox++;
                numero_veces--;
                    for(int i = 0; i < 3; i++){
                        cout<<"\n";
                        for(int e = 0; e < 3; e++){
                            cout<<gato[i][e];
                        }
                    }
            }
        }
        numerox = 0;
        if(numero_veces < 5){
            cout<<"Desean acabar la partida?"<<endl;
            cout<<"Introduzca 0 si desea detener la partida y 1 si desea continuar: ";
            cin>>detener;
        }
        while(numerox == 0){//Empieza el jugador dos con 'o'
            cout<<"\nTurno de segundo jugador "<<segundo_jugador<<endl;
            cout<<"Fila: "; cin>>fila;
            cout<<"Columna: "; cin>>col;
            start = comprobarDim(fila, col);
            if(start == true){
                if(gato[fila][col] == ' '){//Valida los valores del arreglo
                    cout<<"Espacio disponible"<<endl;
                    start = true;
                }else{
                    cout<<"Espacio no disponible. Intente nuevamente."<<endl;
                    start = false;
                }
            }
            if(start == true){
                gato[fila][col] = 'o';
                numerox++;
                numero_veces--;
                for(int i = 0; i < 3; i++){
                    cout<<"\n";
                    for(int e = 0; e < 3; e++){
                        cout<<gato[i][e];
                    }
                }
            }
        }
        numerox = 0;
        if(numero_veces < 5){
            cout<<"\nDesean acabar la partida?"<<endl;
            cout<<"Introduzca 0 si desea detener la partida y 1 si desea continuar: ";
            cin>>detener;
        }

    }

    for(int i = 0; i < 3; i++){
        cout<<"\n";
        for(int e = 0; e < 3; e++){
            cout<<gato[i][e];
        }
    }
    cout<<endl;
}

//Selecciona un jugador aletoriamente, termina el juego y imprime los contadores
void selectorJugador(string name_player_one, string name_player_two){
        string jugador_uno = name_player_one;
        string jugador_dos = name_player_two;
        int container1 = 0;
        int container2 = 0;
        int i = 1;
        while(i == 1){
            srand(time(NULL));
            int val;
            val = (rand()%2) + 1;
            if(val == 1){

                cout<<"\nEl jugador ";
                cout<< jugador_uno;
                cout<< " va empezar" <<endl;
                container1++;
                empezarJugar(jugador_uno, jugador_dos);
            }else{
                cout<<"\nEl jugador ";
                cout<< jugador_dos;
                cout<< " va empezar" <<endl;
                container2++;
                empezarJugar(jugador_dos, jugador_uno);
            }

            cout<<"\nSi desea repetir el proceso presione uno, si no presione cualquier otro numero: ";
            cin>>i;
        }
        cout<<"El juego ha finalizado."<<endl;
        cout<<"El valor del contador del jugador "<<jugador_uno<<" empezo primero "<<container1<<endl;
        cout<<"El valor del contador del jugador "<<jugador_dos<<" empezo primero "<<container2<<endl;

}

//Funcion principal de la aplicacion
int main (){
    string name_player_one;
    string name_player_two;


    cout<<"Introduce el nombre del primer jugador"<<endl;
    getline(cin, name_player_one);

    cout<<"Introduce el nombre del segundo jugador"<<endl;
    getline(cin, name_player_two);

    selectorJugador(name_player_one, name_player_two);

}
