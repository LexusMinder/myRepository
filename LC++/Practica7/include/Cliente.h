#ifndef CLIENTE_H
#define CLIENTE_H
#include <string>

class Cliente
{
    public:
        Cliente(std::string, std::string, std::string);
        Cliente();
        friend class Cuenta;
        long getID();
        void setID(long val);
        std::string getNombre();
        void setNombre(std::string);
        std::string getDireccion();
        void setDireccion(std::string);
        std::string getRFC();
        void setRFC(std::string);
        void verInformacion();

    protected:

    private:
        static long ID;
        std::string nombre;
        std::string direccion;
        std::string RFC;
};

#endif // CLIENTE_H
