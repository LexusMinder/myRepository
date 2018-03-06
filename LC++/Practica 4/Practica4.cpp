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

bool comprobarDim(int, int);//Prototipo de la funcion comprobarDim

void empezarJugar(string, string , int&, int&); //Prototipo de la funcion empezarJugar

void selectorJugador(string, string); //Prototipo de la funcion selectorJugador

int validarGanador(char [][3]);//

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

//Valida si ganaron las x's o o's de forma horizontal, verticalmente
int validarGanador(char arreglo[][3]){
    int detener = 1;
            //Bloque que valida Horizontalemnte
			if(arreglo[0][0] == 'o' && arreglo[0][1] == 'o' && arreglo[0][2] == 'o'){
				cout<<"Ha ganado las o's de forma horizontal"<<endl;
                detener = 2;

			}else if(arreglo[0][0] == 'x' && arreglo[0][1] == 'x' && arreglo[0][2] == 'x'){
				cout<<"Ha ganado las x's de forma horizontal"<<endl;
				detener = 0;

			}else if(arreglo[1][0] == 'o' && arreglo[1][1] == 'o' && arreglo[1][2] == 'o'){
				cout<<"Ha ganado las o's de forma horizontal"<<endl;
                detener = 2;

			}else if(arreglo[1][0] == 'x' && arreglo[1][1] == 'x' && arreglo[1][2] == 'x'){
				cout<<"Ha ganado las x's de forma horizontal"<<endl;
				detener = 0;

			}else if(arreglo[2][0] == 'o' && arreglo[2][1] == 'o' && arreglo[2][2] == 'o'){
				cout<<"Ha ganado las o's de forma horizontal"<<endl;
				detener = 2;

			}else if(arreglo[2][0] == 'x' && arreglo[2][1] == 'x' && arreglo[2][2] == 'x'){
				cout<<"Ha ganado las x's de forma horizontal"<<endl;
				detener = 0;

			}

			//Bloque valida verticalmente
			if(arreglo[0][0] == 'o' && arreglo[1][0] == 'o' && arreglo[2][0] == 'o'){
				cout<<"Ha ganado las o's de forma verticalmente"<<endl;
                detener = 2;

			}else if(arreglo[0][0] == 'x' && arreglo[1][0] == 'x' && arreglo[2][0] == 'x'){
				cout<<"Ha ganado las x's de forma verticalmente"<<endl;
				detener = 0;

			}else if(arreglo[0][1] == 'o' && arreglo[1][1] == 'o' && arreglo[2][1] == 'o'){
				cout<<"Ha ganado las o's de forma verticalmente"<<endl;
                detener = 2;

			}else if(arreglo[0][1] == 'x' && arreglo[1][1] == 'x' && arreglo[2][1] == 'x'){
				cout<<"Ha ganado las x's de forma verticalmente"<<endl;
				detener = 0;

			}else if(arreglo[0][2] == 'o' && arreglo[1][2] == 'o' && arreglo[2][2] == 'o'){
				cout<<"Ha ganado las o's de forma verticalmente"<<endl;
				detener = 2;

			}else if(arreglo[0][2] == 'x' && arreglo[1][2] == 'x' && arreglo[2][2] == 'x'){
				cout<<"Ha ganado las x's de forma verticalmente"<<endl;
				detener = 0;

			}

    return detener;
}

//Selecciona un jugador aletoriamente, termina el juego y imprime los contadores
void selectorJugador(string name_player_one, string name_player_two){
        string jugador_uno = name_player_one;
        string jugador_dos = name_player_two;
        int contador_nombre_jugador_uno = 0;
        int contador_nombre_jugador_dos = 0;
        int contadorPrimerJugador = 0;
        int contadorSegundoJugador = 0;
        int contadorEmpate = 0;
        int variableCambianteUno = 1;
        int variableCambianteDos = 1;
        int i = 1;
        while(i == 1){
            srand(time(NULL));
            int val;
            val = (rand()%2) + 1;
            if(val == 1){

                cout<<"\nEl jugador ";
                cout<< jugador_uno;
                cout<< " va empezar" <<endl;
                empezarJugar(jugador_uno, jugador_dos, contadorPrimerJugador, contadorSegundoJugador);

                if(contadorPrimerJugador == variableCambianteUno){
                    contador_nombre_jugador_uno++;
                    variableCambianteUno++;
                }else if(contadorSegundoJugador == variableCambianteDos){
                    contador_nombre_jugador_dos++;
                    variableCambianteDos++;
                }else{
                    contadorEmpate++;
                }

            }else{
                cout<<"\nEl jugador ";
                cout<< jugador_dos;
                cout<< " va empezar" <<endl;
                empezarJugar(jugador_dos, jugador_uno, contadorPrimerJugador, contadorSegundoJugador);

                if(contadorPrimerJugador == variableCambianteUno){
                    contador_nombre_jugador_dos++;
                    variableCambianteUno++;
                }else if(contadorSegundoJugador == variableCambianteDos){
                    contador_nombre_jugador_uno++;
                    variableCambianteDos++;
                }else{
                    contadorEmpate++;
                }
            }
            cout<<"\nSi desea repetir el proceso presione uno, si no presione cualquier otro numero: ";
            cin>>i;

        }
            cout<<"El jugador "<<jugador_uno<<" gano "<<contador_nombre_jugador_uno<<endl;
            cout<<"El jugador "<<jugador_dos<<" gano "<<contador_nombre_jugador_dos<<endl;
            cout<<"Hubo "<<contadorEmpate<<" empates"<<endl;
}

//Empieza el juego del gato
void empezarJugar(string primer_jugador, string segundo_jugador, int &contadorPrimerJugador, int &contadorSegundoJugador){
    const int tam = 3;//Logitud del arreglo
    char gato[tam][tam] = {{' ', ' ', ' '}, {' ', ' ', ' '}, {' ', ' ', ' '}};
    int fila = 0; //Failas del arreglo
    int col = 0; // Columnas del arreglo
    int numero_veces = 9; //Numero de veces que se repitira el ciclo principal
    bool start = false; //Variable que representa si las dimensiones son correctas o incorrectas
    int detener = 1; //Variable que detiene el ciclo principal
    int numerox = 0; //La siguiente variable permite o detien los bloques while
    int detener2 = 0;

	//Ciclo principal este se repetira por lo menos nueve veces, o en caso detecte un ganador
    while(numero_veces >= 0 && detener == 1){

    	//Ciclo perteneciente al primer jugador este siempre empeiza con x's
		while(numerox == 0){
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
                cout<<"Respuesta escrita\n\n";
                numerox++;//Permite salir del while del primer jugador
                numero_veces--;
                    for(int i = 0; i < 3; i++){
                    cout<<"- - - - - - - "<<endl;
                    for(int e = 0; e < 3; e++){
                        cout<<"- "<<gato[i][e]<<" ";
                    }
                    cout<<"-"<<endl;
                }
                cout<<"- - - - - - -\n";

                detener = validarGanador(gato);
                if(detener == 0 ){
                    contadorPrimerJugador++;
                }
            }
        }//Fin del ciclo del primer jugador
        numerox = 0;
        if(detener != 1){
            numerox = 1;
        }
        if(numero_veces < 5 && detener == 1){
            cout<<"\nDesean acabar la partida?"<<endl;
            cout<<"Introduzca 0 si desea detener la partida y 1 si desea continuar: ";
            cin>>detener;
            if(detener == 0){//Bloque que permite detener el el siguiente ciclo y el ciclo principal
                numerox = 1;//Detiene el ciclo del segundo jugador
                detener = 0;//Detiene el ciclo principal
            }
        }//Fin del codigo intermedio

		//Inicio del ciclo del segundo jugador
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
                cout<<"Respuesta escrita\n\n";
                numerox++;
                numero_veces--;

                for(int i = 0; i < 3; i++){
                    cout<<"- - - - - - - "<<endl;
                    for(int e = 0; e < 3; e++){
                        cout<<"- "<<gato[i][e]<<" ";
                    }
                    cout<<"-"<<endl;
                }
                cout<<"- - - - - - -\n";

                detener = validarGanador(gato);
                if(detener == 2){
                    contadorSegundoJugador++;
                }
            }
        }
        numerox = 0;
        if(numero_veces < 5 && detener == 1){
            cout<<"\nDesean acabar la partida?"<<endl;
            cout<<"Introduzca 0 si desea detener la partida y 1 si desea continuar: ";
            cin>>detener;
        }

    }


        cout<<". La partida ha finalizado"<<endl;
        for(int i = 0; i < 3; i++){
        cout<<"- - - - - - - "<<endl;
            for(int e = 0; e < 3; e++){
                cout<<"- "<<gato[i][e]<<" ";
            }
        cout<<"-"<<endl;
        }
        cout<<"- - - - - - -\n"<<endl;
        cout<<endl;
}
