<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Gestión de Inspecciones') }}
            </h2>
            <div class="flex items-center space-x-4">
                <select class="rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500">
                    <option>SIMBA-SZD-001</option>
                    <option>CAT-320D-002</option>
                    <option>KOM-930E-003</option>
                    <option>VOL-A40G-004</option>
                </select>
                <button class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition-colors">
                    Cambiar Equipo
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header del Equipo -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                <div class="bg-gradient-to-r from-yellow-600 to-yellow-700 px-6 py-4">
                    <div class="flex justify-between items-center text-white">
                        <div>
                            <h3 class="text-lg font-semibold">SIMBA-SZD-001</h3>
                            <p class="text-yellow-100">Perforadora - Serie: EPI-2024-001</p>
                            <p class="text-sm text-yellow-100">Ubicación: Mina Norte - Sector A</p>
                        </div>
                        <div class="text-right">
                            <div
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-500 text-white">
                                <div class="w-2 h-2 bg-white rounded-full mr-2"></div>
                                Operativa
                            </div>
                            <p class="text-sm text-yellow-100 mt-1">Última inspección: Hace 2 horas</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Formulario Principal de Inspección -->
                <div class="lg:col-span-2">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold text-gray-900">Lista de Inspección General</h3>
                                <span class="text-sm text-gray-500">Fecha: {{ date('d/m/Y H:i') }}</span>
                            </div>
                        </div>

                        <form class="p-6 space-y-4" id="inspectionForm">
                            <!-- Items de Inspección -->
                            <div class="space-y-3">
                                <!-- Item 1 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="cuchara"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar el estado de la cuchara">
                                        <label for="cuchara" class="text-gray-700 font-medium">Revisar el estado de la
                                            cuchara</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="cuchara">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 2 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="llantas"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar el estado de las llantas">
                                        <label for="llantas" class="text-gray-700 font-medium">Revisar el estado de las
                                            llantas</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="llantas">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 3 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="articulacion"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar engrase en la articulación central superior e inferior">
                                        <label for="articulacion" class="text-gray-700 font-medium">Revisar engrase en la
                                            articulación central superior e inferior</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="articulacion">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 4 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="cilindro"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar engrase en cilindro de dirección">
                                        <label for="cilindro" class="text-gray-700 font-medium">Revisar engrase en cilindro de
                                            dirección</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="cilindro">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 5 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="botellones"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar engrase en los botellones de levante y volteo">
                                        <label for="botellones" class="text-gray-700 font-medium">Revisar engrase en los
                                            botellones de levante y volteo</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="botellones">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 6 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="zbar"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar engrase en Z-BAR">
                                        <label for="zbar" class="text-gray-700 font-medium">Revisar engrase en Z-BAR</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="zbar">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 7 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="dogbone"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar engrase en DOG-BONE">
                                        <label for="dogbone" class="text-gray-700 font-medium">Revisar engrase en DOG-BONE</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="dogbone">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 8 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="brazo"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar engrase en el brazo/puño de cuchara">
                                        <label for="brazo" class="text-gray-700 font-medium">Revisar engrase en el brazo/puño de
                                            cuchara</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="brazo">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 9 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="tablero"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Verificar estado del tablero del control y display">
                                        <label for="tablero" class="text-gray-700 font-medium">Verificar estado del tablero del
                                            control y display</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="tablero">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Item 10 -->
                                <div
                                    class="flex items-center justify-between p-4 rounded-lg border border-gray-200 hover:border-yellow-300 transition-colors">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" id="extintores"
                                               class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 inspection-check"
                                               data-item="Revisar extintores y verificar que esté cargado">
                                        <label for="extintores" class="text-gray-700 font-medium">Revisar extintores y verificar
                                            que esté cargado</label>
                                    </div>
                                    <button type="button"
                                            class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors issue-btn hidden"
                                            data-target="extintores">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Observaciones Generales -->
                            <div class="mt-6">
                                <label for="observaciones" class="block text-sm font-medium text-gray-700 mb-2">Observaciones
                                    Generales</label>
                                <textarea id="observaciones" rows="3"
                                          class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"
                                          placeholder="Ingrese observaciones adicionales sobre la inspección..."></textarea>
                            </div>

                            <!-- Botones de Acción -->
                            <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                                <div class="flex items-center space-x-2 text-sm text-gray-600">
                                    <span>Progreso:</span>
                                    <div class="w-32 bg-gray-200 rounded-full h-2">
                                        <div class="bg-yellow-600 h-2 rounded-full transition-all duration-300" style="width: 0%"
                                             id="progressBar"></div>
                                    </div>
                                    <span id="progressText">0/10</span>
                                </div>
                                <div class="flex space-x-3">
                                    <button type="button"
                                            class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium transition-colors">
                                        Omitir
                                    </button>
                                    <button type="submit"
                                            class="px-6 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded-md font-medium transition-colors">
                                        Confirmar Inspección
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Panel Lateral -->
                <div class="space-y-6">
                    <!-- Panel de Seguridad -->
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="bg-blue-600 px-4 py-3">
                            <h3 class="text-white font-semibold">Equipo de Protección</h3>
                        </div>
                        <div class="p-4">
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto mb-3 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2L3 7l9 5 9-5-9-5zM3 17l9 5 9-5M3 12l9 5 9-5"/>
                                    </svg>
                                </div>
                                <p class="text-sm font-medium text-gray-800 mb-2">USO OBLIGATORIO</p>
                                <div class="grid grid-cols-2 gap-2 text-xs text-gray-600">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full mr-1"></div>
                                        Casco
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full mr-1"></div>
                                        Chaleco
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full mr-1"></div>
                                        Botas
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full mr-1"></div>
                                        Guantes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panel de Mantenimiento -->
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="bg-green-600 px-4 py-3">
                            <h3 class="text-white font-semibold">Agendar Mantenimiento</h3>
                        </div>
                        <div class="p-4">
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Mantenimiento</label>
                                    <select
                                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 text-sm">
                                        <option>Preventivo</option>
                                        <option>Correctivo</option>
                                        <option>Emergencia</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
                                    <input type="date"
                                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Hora</label>
                                    <input type="time"
                                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Prioridad</label>
                                    <select
                                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 text-sm">
                                        <option>Baja</option>
                                        <option>Media</option>
                                        <option>Alta</option>
                                        <option>Crítica</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                                    <textarea rows="3"
                                              class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 text-sm"
                                              placeholder="Describa el trabajo requerido..."></textarea>
                                </div>
                                <button type="button"
                                        class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md font-medium transition-colors text-sm">
                                    Agendar Mantenimiento
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Historial Reciente -->
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="bg-gray-800 px-4 py-3">
                            <h3 class="text-white font-semibold">Historial Reciente</h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-3">
                                <div class="flex items-center text-xs">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                                    <span class="text-gray-600">Hace 3d - Revisión de seguridad</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                    <span class="text-gray-600">Hace 1sem - Reparación menor</span>
                                </div>
                            </div>
                            <button class="w-full mt-3 text-sm text-gray-600 hover:text-gray-800 font-medium">
                                Ver historial completo →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Reportar Problemas -->
    <div id="issueModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
                <div class="flex justify-between items-center p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Reportar Problema</h3>
                    <button class="text-gray-400 hover:text-gray-600" onclick="closeIssueModal()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <form class="p-6 space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Componente</label>
                        <input type="text" id="modalComponent"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                               readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Problema</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                            <option>Fuga de aceite</option>
                            <option>Desgaste excesivo</option>
                            <option>Ruido anormal</option>
                            <option>Vibración</option>
                            <option>Mal funcionamiento</option>
                            <option>Daño visible</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Severidad</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                            <option value="baja" class="text-green-600">Baja - Operación normal</option>
                            <option value="media" class="text-yellow-600">Media - Requiere atención</option>
                            <option value="alta" class="text-orange-600">Alta - Reparación urgente</option>
                            <option value="critica" class="text-red-600">Crítica - Detener operación</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Descripción del Problema</label>
                        <textarea rows="3"
                                  class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500"
                                  placeholder="Describa detalladamente el problema encontrado..." required></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Acción Recomendada</label>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                            <option>Agendar mantenimiento preventivo</option>
                            <option>Reparación inmediata</option>
                            <option>Reemplazo de componente</option>
                            <option>Monitoreo continuo</option>
                            <option>Inspección técnica especializada</option>
                        </select>
                    </div>

                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeIssueModal()"
                                class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium transition-colors">
                            Cancelar
                        </button>
                        <button type="submit"
                                class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md font-medium transition-colors">
                            Reportar Problema
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
