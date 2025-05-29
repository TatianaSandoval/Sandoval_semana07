<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-house"></i>
            <span>Panel de control</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#accesosCollapse">
            <i class="bi bi-people"></i>
            <span>Accesos</span>
            <i class="bi bi-chevron-down float-end"></i>
        </a>
        <div class="collapse" id="accesosCollapse">
            <ul class="nav flex-column ps-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Administrar grupos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Administrar usuarios</a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-list-ul"></i>
            <span>Categorías</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#productosCollapse">
            <i class="bi bi-box-seam"></i>
            <span>Productos</span>
            <i class="bi bi-chevron-down float-end"></i>
        </a>
        <div class="collapse" id="productosCollapse">
            <ul class="nav flex-column ps-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Administrar productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agregar productos</a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-images"></i>
            <span>Media</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#ventasCollapse">
            <i class="bi bi-receipt"></i>
            <span>Ventas</span>
            <i class="bi bi-chevron-down float-end"></i>
        </a>
        <div class="collapse" id="ventasCollapse">
            <ul class="nav flex-column ps-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Administrar ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agregar venta</a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#reportesCollapse">
            <i class="bi bi-bar-chart"></i>
            <span>Reporte de ventas</span>
            <i class="bi bi-chevron-down float-end"></i>
        </a>
        <div class="collapse" id="reportesCollapse">
            <ul class="nav flex-column ps-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Ventas por fecha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ventas mensuales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ventas diarias</a>
                </li>
            </ul>
        </div>
    </li>
</ul>

<style>
    .nav-link {
        color: #495057;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        transition: all 0.3s;
    }
    
    .nav-link:hover {
        color: #FF4500;
        background-color: #FFE4B5;
    }
    
    .nav-link i.bi {
        margin-right: 10px;
        color: #6c757d;
    }
    
    .nav-link[aria-expanded="true"] {
        color: #FF4500;
        background-color: #FFE4B5;
    }
    
    .nav-link[aria-expanded="true"] i.bi-chevron-down {
        transform: rotate(180deg);
    }
    
    .nav-link.collapsed i.bi-chevron-down {
        transition: transform 0.3s;
    }
    
    .nav-item .nav {
        border-left: 2px solid #FFA500;
        margin-left: 1rem;
    }
</style>

<script>
// Activar los submenús
document.addEventListener('DOMContentLoaded', function() {
    var collapseElements = document.querySelectorAll('.collapse');
    collapseElements.forEach(function(element) {
        element.addEventListener('show.bs.collapse', function() {
            this.previousElementSibling.classList.remove('collapsed');
            this.previousElementSibling.setAttribute('aria-expanded', 'true');
        });
        
        element.addEventListener('hide.bs.collapse', function() {
            this.previousElementSibling.classList.add('collapsed');
            this.previousElementSibling.setAttribute('aria-expanded', 'false');
        });
    });
});
</script>