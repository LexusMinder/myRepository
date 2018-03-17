//Filename: proyecto1.cpp
//Objetivo: el proyecto 1 consistira en el desarrollo de un juego de gato, dicho juego sera capaz
//de elegir jugadores al azar y llevar contadores de los mismos

//Directivas al procesador
#include <iostream>
#include <string>
#include <cstdlib>
#include <ctime>

using namespace std;//Permite usar el espacio de nombre std::

//Prototipos de las funciones
int selectorJugador(string, string);
void empezarJugar(string, string, int&, int&, int&);
bool comprobarDim(int, int);
int validarGanador(char [][3]);
bool selectorJugadorDos(string, string);
int validarNumero(string);
string almacenInstrucciones(int);

//Funcion principal que muestra el menu principal del programa
int main(){
        string nombreJugadorUno;//Variable del juagador uno
        string nombreJugadorDos;//Variable del jugador dos
        bool seguirJugando = true;//Variable que permite repetir el ciclo
        int opc = 0;//Variable que seleccioan las opciones del menu

        while(seguirJugando == true){
            cout<<"Seleccione la opcion del menu: "<<endl;
            cout<<"   1) Iniciar juego"<<endl;
            cout<<"   2) Salir"<<endl;
            cout<<"\nSet>"; //cin>>opc;
            opc = validarNumero(almacenInstrucciones(1));
            cin.ignore();

            if(opc == 1){
                cout<<"Introduce el nombre del primer jugador: "<<endl;
                getline(cin, nombreJugadorUno);

                cout<<"\nIntroduce el nombre del segundo jugador: "<<endl;
                getline(cin, nombreJugadorDos);

                seguirJugando = selectorJugadorDos(nombreJugadorUno, nombreJugadorDos);
                seguirJugando =  true;
            }else if(opc == 2){
                cout<<"\nGracias por participar"<<endl;
                seguirJugando = false;
            }
        }
    return 0;
}

//Funcion que empieza el juego del gato que recibe tres variables de tipo int como referencias
void empezarJugar(string primer_jugador, string segundo_jugador, int &contadorPrimerJugador, int &contadorSegundoJugador, int &contadorEmpate){
    const int tam = 3;//Logitud del arreglo
    char gato[tam][tam] = {{' ', ' ', ' '}, {' ', ' ', ' '}, {' ', ' ', ' '}};//Inicializa el tablero del gato
    int fila = 0; //Failas del arreglo
    int col = 0; // Columnas del arreglo
    int numero_veces = 9; //Numero de veces que se repitira el ciclo principal
    bool start = false; //Variable que representa si las dimensiones son correctas o incorrectas
    int detener = 1; //Variable que detiene el ciclo principal
    int numerox = 0; //La siguiente variable permite o detien los bloques while

	//Ciclo principal este se repetira por lo menos nueve veces, o en caso detecte un ganador
    while(numero_veces >= 1 && detener == 1){

    	//Ciclo perteneciente al primer jugador este siempre empeiza con x's
		while(numerox == 0){
            cout<<"\nTurno de "<<primer_jugador<<endl;
            cout<<"Fila: "; fila = validarNumero(almacenInstrucciones(2));//cin>>fila;//Asigna un valor a filas
            cout<<"Columna: ";col = validarNumero(almacenInstrucciones(3)); //cin>>col;//Asigna un valor a columnas
            start = comprobarDim(fila, col);//Valida que las magnitudes sean correctas
            if(start == true){//Valida los valores del arreglo
                if(gato[fila][col] == ' '){
                    cout<<"Espacio disponible."<<endl;
                    start = true;
                }else{
                    cout<<"Espacio no disponible. Intente nuevamente."<<endl;
                    start = false;
                }
            }
            if(start == true){//Si la comprobacion no tuvo nigun error entra al siguiente codigo
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
        if(detener == 2 || detener == 0){
            numerox = 1;
        }

		//Inicio del ciclo del segundo jugador
        while(numerox == 0 && numero_veces != 0){//Empieza el jugador dos con 'o'
            cout<<"\nTurno de "<<segundo_jugador<<endl;
            cout<<"Fila: "; fila = validarNumero(almacenInstrucciones(2));//cin>>fila;
            cout<<"Columna: "; col = validarNumero(almacenInstrucciones(3)); //cin>>col;
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
            if(start == true){//Si la comprobacion no tuvo nigun error entra al siguiente codigo
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
        }//Fin del ciclo del segundo jugador
        numerox = 0;
        if(detener == 2 || detener == 0){
            numerox = 1;
        }
    }
    if(detener == 1)//Funcion que suma una en dado caso sea un empate
        contadorEmpate++;

    //Imprime el tablero de gato final
    cout<<". La partida ha finalizado."<<endl;
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

//Funcion que valida que la magnitudes escritas se han correctas
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

//Funcion que valida si las o's o x's ganaron
int validarGanador(char arreglo[][3]){
    int detener = 1;//Variable auxiliar
            //Bloque que valida Horizontalemnte
			if(arreglo[0][0] == 'o' && arreglo[0][1] == 'o' && arreglo[0][2] == 'o'){
				cout<<"Ha ganado las o's de forma horizontal";
                detener = 2;

			}else if(arreglo[0][0] == 'x' && arreglo[0][1] == 'x' && arreglo[0][2] == 'x'){
				cout<<"Ha ganado las x's de forma horizontal";
				detener = 0;

			}else if(arreglo[1][0] == 'o' && arreglo[1][1] == 'o' && arreglo[1][2] == 'o'){
				cout<<"Ha ganado las o's de forma horizontal";
                detener = 2;

			}else if(arreglo[1][0] == 'x' && arreglo[1][1] == 'x' && arreglo[1][2] == 'x'){
				cout<<"Ha ganado las x's de forma horizontal";
				detener = 0;

			}else if(arreglo[2][0] == 'o' && arreglo[2][1] == 'o' && arreglo[2][2] == 'o'){
				cout<<"Ha ganado las o's de forma horizontal";
				detener = 2;

			}else if(arreglo[2][0] == 'x' && arreglo[2][1] == 'x' && arreglo[2][2] == 'x'){
				cout<<"Ha ganado las x's de forma horizontal";
				detener = 0;

			}

			//Bloque valida verticalmente
			if(arreglo[0][0] == 'o' && arreglo[1][0] == 'o' && arreglo[2][0] == 'o'){
				cout<<"Ha ganado las o's de forma verticalmente";
                detener = 2;

			}else if(arreglo[0][0] == 'x' && arreglo[1][0] == 'x' && arreglo[2][0] == 'x'){
				cout<<"Ha ganado las x's de forma verticalmente";
				detener = 0;

			}else if(arreglo[0][1] == 'o' && arreglo[1][1] == 'o' && arreglo[2][1] == 'o'){
				cout<<"Ha ganado las o's de forma verticalmente";
                detener = 2;

			}else if(arreglo[0][1] == 'x' && arreglo[1][1] == 'x' && arreglo[2][1] == 'x'){
				cout<<"Ha ganado las x's de forma verticalmente";
				detener = 0;

			}else if(arreglo[0][2] == 'o' && arreglo[1][2] == 'o' && arreglo[2][2] == 'o'){
				cout<<"Ha ganado las o's de forma verticalmente";
				detener = 2;

			}else if(arreglo[0][2] == 'x' && arreglo[1][2] == 'x' && arreglo[2][2] == 'x'){
				cout<<"Ha ganado las x's de forma verticalmente";
				detener = 0;

			}

			//Validar de forma diagonalmente
			if(arreglo[0][0] == 'o' && arreglo[1][1] == 'o' && arreglo[2][2] == 'o'){
				cout<<"Ha ganado las o's de forma diogonal";
                detener = 2;

			}else if(arreglo[0][0] == 'x' && arreglo[1][1] == 'x' && arreglo[2][2] == 'x'){
				cout<<"Ha ganado las x's de forma diagonal";
				detener = 0;

			}else if(arreglo[0][2] == 'o' && arreglo[1][1] == 'o' && arreglo[2][0] == 'o'){
				cout<<"Ha ganado las o's de forma diagonal";
                detener = 2;

			}else if(arreglo[0][2] == 'x' && arreglo[1][1] == 'x' && arreglo[2][0] == 'x'){
				cout<<"Ha ganado las x's de forma diagonal";
				detener = 0;
			}
    return detener;
}

//Funcion que selecciona quien ira x's o o's, y quien elegira la siguiente partida
bool selectorJugadorDos(string n1, string n2){
    int contadorJugadorN1 = 0;//Inicializa la variable que almacenara las veces que gano el juagdor n1
    int contadorJugadorN2 = 0;//Inicializa la variable que almacenara las veces que gano el juagdor n2
    int contadorJugadorE = 0;//Inicializa la varaiable que alamacena los empates
    int opc = 1;//Inicializa la varibale que finaliza o continua el ciclo
    int var1 = 1;//Variable auxiliar
    int var2 = 1;//Variable auxiliar
    int val = 0;//Variable que permite seleccionar que empieza con x's o o's
    srand(time(NULL));
    val = (rand()%3) + 1;//Asigana un valor al azar a la variable val

    do{//Inicio del ciclo principal
        if(val == 1){//Empieza el juagdor n1 con x's
            empezarJugar(n1, n2, contadorJugadorN1, contadorJugadorN2, contadorJugadorE);//Manda a llamar la funcion emepezarJugar

        }else{//Empieza el juagador n2 con x's
            empezarJugar(n2, n1, contadorJugadorN2, contadorJugadorN1, contadorJugadorE);//Manda a llamar a la funcion empezarJugar
        }

        //Bloque que muestra el marcador
        cout<<"El jugador "<<n1<<" gano "<<contadorJugadorN1<<endl;
        cout<<"El jugador "<<n2<<" gano "<<contadorJugadorN2<<endl;
        cout<<"Hubo "<<contadorJugadorE<<" empates\n"<<endl;
        cout<<"Si desea repetir el proceso introduzca uno sino desea seguir jugando introduzca cero: "; //cin>>opc;//Permite terminar el ciclo principal
        opc = validarNumero(almacenInstrucciones(4));

        if(opc == 1){
            if(contadorJugadorN1 == var1){//Si el jugador n1 gana el selecciona si ira x's o o's
                cout<<"El ganador de la partida es "<<n1<<". Seleccione lo que desea ir en la siguiente partida, uno si es x's y dos si desea o's: ";
                cin>>val;
                var1++;
            }else if(contadorJugadorN2 == var2){//Si el juagdor n2 gana el selecciona si ira x's o o's
                cout<<"El ganador de la partida es "<<n2<<". Seleccione lo que desea ir en la siguiente partida, uno si es x's y dos si desea o's: ";
                cin>>val;
                var2++;
                if(val == 1 )
                    val = val + 1;
                else
                    val = val - 1;
            }else{//En dado caso un haya empate la PC eligira quien empieza
                cout<<"La partida anterior fue un empate. A si que se escogera al azar quien empieza."<<endl;
                val = (rand()%3) + 1;
            }
        }
    }while(opc);//Finaliza o continua el ciclo principal del programa

    //Bloque que muestra las puntuaciones finales
    cout<<"\nEl marcador final es el siguiente:"<<endl;
    cout<<"El jugador "<<n1<<" gano "<<contadorJugadorN1<<endl;
    cout<<"El jugador "<<n2<<" gano "<<contadorJugadorN2<<endl;
    cout<<"Hubo "<<contadorJugadorE<<" empates\n"<<endl;
    return opc;
}

int validarNumero(string instruccion){
    int numero, cont = 0;
    bool continuar;

    do {
      continuar = false;
      cin.clear();
      if(cont > 0){
        cin.ignore(1024, '\n');
        cout<<instruccion;
      }
      cin >> numero;
      cont++;
      if(cin.fail() && cin.rdstate()){
         cout << "Valor no aceptado. Porfavor Introduzca un valor valido." << endl;
         continuar = true;
      }
    } while (continuar);

    return numero;
}

string almacenInstrucciones(int nIntruccion){
    string auxiliar = "Instruccion no proporcionada.";
    if(nIntruccion == 1){
        string iN1 = "\nSet>";
        return iN1;
    }else if(nIntruccion == 2){
        string iN2 = "\nFila: ";
        return iN2;
    }else if(nIntruccion == 3){
        string iN3 = "\nColumna: ";
        return iN3;

    }else if(nIntruccion == 4){
        string iN4 = "\nSi desea repetir el proceso introduzca uno sino desea seguir jugando introduzca cero: ";
        return iN4;
    }else{
        return auxiliar;
    }
}
