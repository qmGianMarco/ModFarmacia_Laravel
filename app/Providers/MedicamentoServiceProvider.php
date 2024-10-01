<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Medicamento;

class MedicamentoServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Puedes registrar bindings aquí si es necesario
    }

    public function boot()
    {
        // Este método se ejecuta al cargar el provider
    }

    // Método para obtener todos los medicamentos
    public function getAllMedicamentos()
    {
        return Medicamento::all(); // Obtiene todos los registros de medicamentos
    }

    // Método para obtener un medicamento por su ID
    public function getMedicamentoById($id)
    {
        return Medicamento::find($id); // Busca un medicamento por su ID
    }

    // Método para filtrar medicamentos según un criterio (opcional)
    public function getMedicamentosByCriteria($criteria)
    {
        return Medicamento::where('nombre', 'like', "%$criteria%")->get(); // Busca por nombre
    }
}
