#include <iostream>
#include "Cuenta.h"

using namespace std;

Cuenta::Cuenta(int ID, string Titular, float Saldo)
    :id(ID), titular(Titular), saldo(Saldo)
{
    //ctor
}

void Cuenta::setId(int ID){
    id = ID;
}

int Cuenta::getId(){
    return id;
}

void Cuenta::setTitular(string Titular){
    titular = titular;
}

string Cuenta::getTitular(){
    return titular;
}

void Cuenta::setSaldo(float Saldo){
    saldo = Saldo;
}

float Cuenta::getSaldo(){
    return saldo;
}

float Cuenta::retiro(float monto){
    if(monto < saldo)
        saldo = saldo - monto;
    else
        cout<<"\nSaldo insuficiente";

    return saldo;
}

void Cuenta::deposito(float monto){
        saldo = saldo + monto;
}

Cuenta::~Cuenta()
{
    //dtor
}
