#include <iostream>
#include "Cliente.h"

using namespace std;

long Cliente::ID = 1000;

Cliente::Cliente(string _nombre, string _direccion, string _RFC)
{
    nombre = _nombre;
    direccion = _direccion;
    RFC = _RFC;
}

Cliente::Cliente(){
    nombre = "No definido";
    direccion = "No defnido";
    RFC = "acbcdef";

}


long Cliente::getID(){
    ID++;
    return ID;
}

void Cliente::setNombre(string val){
    nombre = val;
}

string Cliente::getNombre(){
    return nombre;
}

void Cliente::setDireccion(string val){
    direccion = val;
}

string Cliente::getDireccion(){
    return direccion;
}

void Cliente::setRFC(string val){
    RFC = val;
}

string Cliente::getRFC(){
    return RFC;

}

void Cliente::verInformacion(){
    cout<<"Nombre: "<<nombre<<endl;
    cout<<"Numero de cliente: "<<getID()<<endl;
    cout<<"El RFC es"<<RFC<<endl;
}

