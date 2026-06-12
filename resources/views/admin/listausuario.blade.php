<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestión de Usuarios - UPPDATE</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-purple: #6a0dad;
      --dark-purple: #4b0082;
      --light-purple: #f3e8ff;
      --lighter-purple: #f9f5ff;
      --text-dark: #1f2937;
      --text-gray: #6b7280;
      --white: #ffffff;
      --success-green: #10b981;
      --warning-yellow: #f59e0b;
      --danger-red: #ef4444;
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --radius-sm: 0.375rem;
      --radius-md: 0.5rem;
      --radius-lg: 0.75rem;
      --radius-xl: 1rem;
      --radius-2xl: 1.5rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f9f5ff 0%, #f0e6ff 50%, #e9d8fd 100%);
      min-height: 100vh;
      color: var(--text-dark);
      line-height: 1.6;
    }

    /* Header y navegación - Mismo diseño */
    .main-header {
      background: var(--white);
      box-shadow: var(--shadow-md);
      position: sticky;
      top: 0;
      z-index: 100;
      padding: 1rem 0;
    }

    .header-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-section {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .logo-icon {
      background: linear-gradient(135deg, var(--primary-purple), var(--dark-purple));
      color: var(--white);
      width: 50px;
      height: 50px;
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }

    .logo-text {
      font-weight: 800;
      font-size: 1.8rem;
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .admin-badge {
      background: linear-gradient(to right, var(--primary-purple), var(--dark-purple));
      color: var(--white);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 600;
      font-size: 0.9rem;
      margin-left: 1rem;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .nav-link {
      color: var(--text-dark);
      text-decoration: none;
      font-weight: 600;
      padding: 0.75rem 1.25rem;
      border-radius: var(--radius-lg);
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .nav-link:hover {
      background: var(--light-purple);
      color: var(--primary-purple);
      transform: translateY(-2px);
    }

    .nav-link.active {
      background: var(--primary-purple);
      color: var(--white);
    }

    .logout-btn {
      background: transparent;
      border: 2px solid var(--primary-purple);
      color: var(--primary-purple);
      padding: 0.75rem 1.5rem;
      border-radius: var(--radius-lg);
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .logout-btn:hover {
      background: var(--primary-purple);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Contenedor principal */
    .main-container {
      max-width: 1400px;
      margin: 3rem auto;
      padding: 0 2rem;
    }

    /* Hero section para Gestión de Usuarios */
    .users-hero {
      background: linear-gradient(135deg, var(--primary-purple), var(--dark-purple));
      color: var(--white);
      border-radius: var(--radius-2xl);
      padding: 3rem 2.5rem;
      margin-bottom: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .users-hero::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 300px;
      height: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .page-title {
      font-size: 2.8rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      background: linear-gradient(to right, #ffffff, #e0e7ff);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .page-subtitle {
      font-size: 1.125rem;
      opacity: 0.9;
      margin-bottom: 1.5rem;
    }

    .user-stats {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .stat-badge {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: var(--radius-xl);
      padding: 1rem 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.3s ease;
    }

    .stat-badge:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: translateY(-3px);
    }

    .stat-number {
      font-size: 1.8rem;
      font-weight: 800;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.9;
    }

    .hero-actions {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      min-width: 250px;
    }

    .btn-primary {
      background: linear-gradient(to right, #ffffff, #f0e7ff);
      color: var(--primary-purple);
      padding: 1rem 2rem;
      border: none;
      border-radius: var(--radius-lg);
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      text-decoration: none;
      text-align: center;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-lg);
    }

    /* Panel de gestión */
    .management-panel {
      background: var(--white);
      border-radius: var(--radius-xl);
      padding: 2.5rem;
      box-shadow: var(--shadow-lg);
      margin-bottom: 3rem;
    }

    .panel-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .panel-title {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--text-dark);
    }

    .search-filter {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .search-box {
      position: relative;
      min-width: 250px;
    }

    .search-input {
      width: 100%;
      padding: 0.875rem 1rem 0.875rem 3rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-lg);
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .search-input:focus {
      outline: none;
      border-color: var(--primary-purple);
      box-shadow: 0 0 0 3px rgba(106, 13, 173, 0.2);
    }

    .search-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-gray);
    }

    .filter-select {
      padding: 0.875rem 1rem;
      border: 2px solid #e5e7eb;
      border-radius: var(--radius-lg);
      font-size: 1rem;
      background: var(--white);
      color: var(--text-dark);
      cursor: pointer;
      min-width: 180px;
    }

    /* Tabla mejorada */
    .users-table-container {
      overflow-x: auto;
      border-radius: var(--radius-lg);
      border: 1px solid #e5e7eb;
      margin-top: 1.5rem;
    }

    .users-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }

    .users-table thead {
      background: linear-gradient(to right, var(--light-purple), #e9d8fd);
    }

    .users-table th {
      padding: 1.25rem 1.5rem;
      text-align: left;
      font-weight: 700;
      color: var(--dark-purple);
      font-size: 0.95rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      border-bottom: 2px solid var(--primary-purple);
    }

    .users-table tbody tr {
      border-bottom: 1px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .users-table tbody tr:hover {
      background: var(--lighter-purple);
    }

    .users-table td {
      padding: 1.25rem 1.5rem;
      vertical-align: middle;
    }

    /* Badge de roles */
    .role-badge {
      display: inline-block;
      padding: 0.4rem 1rem;
      border-radius: var(--radius-full);
      font-size: 0.85rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .role-admin {
      background: linear-gradient(to right, #dc2626, #ef4444);
      color: white;
    }

    .role-director {
      background: linear-gradient(to right, #4f46e5, #6366f1);
      color: white;
    }

    .role-rector {
      background: linear-gradient(to right, #059669, #10b981);
      color: white;
    }

    .role-user {
      background: linear-gradient(to right, #6b7280, #9ca3af);
      color: white;
    }

    /* Acciones */
    .actions-cell {
      display: flex;
      gap: 0.5rem;
    }

    .btn-action {
      padding: 0.6rem 1rem;
      border: none;
      border-radius: var(--radius-md);
      font-weight: 600;
      font-size: 0.9rem;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }

    .btn-edit {
      background: linear-gradient(to right, var(--warning-yellow), #fbbf24);
      color: var(--text-dark);
    }

    .btn-edit:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
    }

    .btn-delete {
      background: linear-gradient(to right, var(--danger-red), #f87171);
      color: white;
    }

    .btn-delete:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }

    /* Estados vacíos */
    .empty-state {
      text-align: center;
      padding: 4rem 2rem;
      color: var(--text-gray);
    }

    .empty-icon {
      font-size: 4rem;
      color: #d1d5db;
      margin-bottom: 1.5rem;
    }

    .empty-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .empty-text {
      margin-bottom: 2rem;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Footer */
    .main-footer {
      background: var(--white);
      border-top: 1px solid #e5e7eb;
      padding: 2rem 0;
      margin-top: 4rem;
    }

    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 2rem;
      text-align: center;
      color: var(--text-gray);
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 1rem;
    }

    .footer-link {
      color: var(--primary-purple);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-link:hover {
      color: var(--dark-purple);
      text-decoration: underline;
    }

    .copyright {
      font-size: 0.875rem;
    }

    /* Responsividad */
    @media (max-width: 1024px) {
      .header-content {
        padding: 0 1rem;
      }
      
      .users-hero {
        padding: 2.5rem 2rem;
      }
      
      .page-title {
        font-size: 2.2rem;
      }
      
      .management-panel {
        padding: 2rem;
      }
    }

    @media (max-width: 768px) {
      .header-content {
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
      }
      
      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
      }
      
      .hero-content {
        flex-direction: column;
        text-align: center;
      }
      
      .user-stats {
        justify-content: center;
      }
      
      .panel-header {
        flex-direction: column;
        align-items: stretch;
      }
      
      .search-filter {
        flex-direction: column;
      }
      
      .search-box, .filter-select {
        min-width: 100%;
      }
      
      .actions-cell {
        flex-direction: column;
      }
      
      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Header con navegación -->
  <header class="main-header">
    <div class="header-content">
      <div class="logo-section">
        <div class="logo-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="logo-text">UPPDATE</div>
        <div class="admin-badge">
          <i class="fas fa-user-shield"></i> Administrador
        </div>
      </div>
      
      <div class="nav-links">
        <a href="{{ route('admin.inicio') }}" class="nav-link">
          <i class="fas fa-home"></i>
          Inicio
        </a>
        <a href="{{ route('superadmin.carreras.create') }}" class="nav-link">
          <i class="fas fa-plus-circle"></i>
          Nueva Carrera
        </a>
        <a href="{{ route('admin.usuarios') }}" class="nav-link active">
          <i class="fas fa-user-plus"></i>
          Nuevo Usuario
        </a>
        
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
          @csrf
          <button type="submit" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            Cerrar Sesión
          </button>
        </form>
      </div>
    </div>
  </header>

  <!-- Contenido principal -->
  <main class="main-container">
    <!-- Hero section para Gestión de Usuarios -->
    <section class="users-hero">
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="page-title">Gestión de Usuarios</h1>
          <p class="page-subtitle">Administra todos los usuarios del sistema UPPDATE. Crea, edita y gestiona permisos de acceso.</p>
          
          <div class="user-stats">
            <div class="stat-badge">
              <div class="stat-number">{{ $usuarios->count() }}</div>
              <div class="stat-label">Usuarios Totales</div>
            </div>
            
            <div class="stat-badge">
              <div class="stat-number">{{ $usuarios->where('role', 'admin')->count() }}</div>
              <div class="stat-label">Administradores</div>
            </div>
            
            <div class="stat-badge">
              <div class="stat-number">{{ $usuarios->where('role', 'director')->count() }}</div>
              <div class="stat-label">Directores</div>
            </div>
          </div>
        </div>
        
        <div class="hero-actions">
          <a href="{{ route('admin.usuarios') }}" class="btn-primary">
            <i class="fas fa-user-plus"></i>
            Crear Nuevo Usuario
          </a>
          <p style="font-size: 0.9rem; opacity: 0.9; text-align: center;">Agregar nuevos usuarios al sistema</p>
        </div>
      </div>
    </section>

    <!-- Panel de gestión -->
    <div class="management-panel">
      <div class="panel-header">
        <h2 class="panel-title">Usuarios Registrados</h2>
        
        <div class="search-filter">
          <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Buscar usuario..." id="searchInput">
          </div>
          
          <select class="filter-select" id="roleFilter">
            <option value="">Todos los roles</option>
            <option value="admin">Administrador</option>
            <option value="director">Director</option>
            <option value="rector">Rector</option>
            <option value="user">Usuario</option>
          </select>
        </div>
      </div>

      <div class="users-table-container">
        @if($usuarios->count() > 0)
          <table class="users-table" id="usersTable">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Fecha Registro</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($usuarios as $usuario)
                <tr>
                  <td>
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                      <div style="width: 40px; height: 40px; background: linear-gradient(135deg, var(--primary-purple), var(--dark-purple)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">
                        {{ substr($usuario->name, 0, 1) }}
                      </div>
                      <div>
                        <div style="font-weight: 600;">{{ $usuario->name }}</div>
                        <div style="font-size: 0.85rem; color: var(--text-gray);">ID: {{ $usuario->id }}</div>
                      </div>
                    </div>
                  </td>
                  <td style="font-weight: 500;">{{ $usuario->username }}</td>
                  <td>{{ $usuario->email }}</td>
                  <td>
                    @php
                      $roleClass = 'role-user';
                      if($usuario->role == 'admin') $roleClass = 'role-admin';
                      elseif($usuario->role == 'director') $roleClass = 'role-director';
                      elseif($usuario->role == 'rector') $roleClass = 'role-rector';
                    @endphp
                    <span class="role-badge {{ $roleClass }}">
                      {{ ucfirst($usuario->role) }}
                    </span>
                  </td>
                  <td style="color: var(--text-gray); font-size: 0.9rem;">
                    {{ $usuario->created_at->format('d/m/Y') }}
                  </td>
                  <td class="actions-cell">
                    <a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class="btn-action btn-edit">
                      <i class="fas fa-edit"></i>
                      Editar
                    </a>
                    <form action="{{ route('admin.usuarios.destroy', $usuario->id) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete()">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-action btn-delete">
                        <i class="fas fa-trash-alt"></i>
                        Eliminar
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <div class="empty-state">
            <div class="empty-icon">
              <i class="fas fa-users-slash"></i>
            </div>
            <h3 class="empty-title">No hay usuarios registrados</h3>
            <p class="empty-text">Comienza agregando nuevos usuarios al sistema para gestionar permisos y accesos.</p>
            <a href="{{ route('admin.usuarios') }}" class="btn-primary" style="display: inline-flex; width: auto;">
              <i class="fas fa-user-plus"></i>
              Crear Primer Usuario
            </a>
          </div>
        @endif
      </div>

      <!-- Sección de paginación removida ya que $usuarios es una Collection -->
    </div>
  </main>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
        <a href="{{ route('admin.inicio') }}" class="footer-link">Inicio</a>
        <a href="#" class="footer-link">Documentación</a>
        <a href="#" class="footer-link">Soporte</a>
        <a href="#" class="footer-link">Políticas de Uso</a>
      </div>
      <p class="copyright">© {{ date('Y') }} UPPDATE - Sistema de Gestión de Usuarios</p>
    </div>
  </footer>

  <script>
    function confirmDelete() {
      return confirm('¿Estás seguro de eliminar este usuario? Esta acción no se puede deshacer.');
    }

    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const roleFilter = document.getElementById('roleFilter');
      const tableRows = document.querySelectorAll('#usersTable tbody tr');
      
      function filterUsers() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedRole = roleFilter.value;
        
        tableRows.forEach(row => {
          const name = row.cells[0].textContent.toLowerCase();
          const username = row.cells[1].textContent.toLowerCase();
          const email = row.cells[2].textContent.toLowerCase();
          const role = row.cells[3].textContent.toLowerCase();
          
          const matchesSearch = name.includes(searchTerm) || 
                               username.includes(searchTerm) || 
                               email.includes(searchTerm);
          
          const matchesRole = !selectedRole || role.includes(selectedRole);
          
          if (matchesSearch && matchesRole) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      }
      
      if (searchInput) {
        searchInput.addEventListener('input', filterUsers);
      }
      
      if (roleFilter) {
        roleFilter.addEventListener('change', filterUsers);
      }
      
      tableRows.forEach((row, index) => {
        row.style.animationDelay = `${index * 0.05}s`;
        row.classList.add('fade-in');
      });
      
      const actionButtons = document.querySelectorAll('.btn-action');
      actionButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
        });
      });
    });
  </script>
</body>
</html>