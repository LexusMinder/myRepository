#include <iostream>
#include "Cuenta.h"

using namespace std;

Cuenta::Cuenta(int ID, Cliente Titular, float Saldo)
{
    id = ID;
    titular = Cliente(Titular);
    saldo = Saldo;
}

void Cuenta::setId(int ID){
    id = ID;
}

int Cuenta::getId(){
    return id;
}

void Cuenta::setTitular(Cliente Titular){
    titular = Cliente();
}

Cliente Cuenta::getTitular(){
    return titular;
}

void Cuenta::setSaldo(float Saldo){
    saldo = Saldo;
}

float Cuenta::getSaldo(){
    return saldo;
}

float Cuenta::retiro(float monto){
        saldo = saldo - monto;
    return saldo;
}

void Cuenta::deposito(float monto){
        saldo = saldo + monto;
}

void Cuenta::verInformacion(){
    titular.verInformacion();
}

Cuenta::~Cuenta()
{
    //dtor
}
