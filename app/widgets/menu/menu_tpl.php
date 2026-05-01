<li class="nav-item <?php if(isset($category['children'])) echo 'dropdown' ?>">
    <a class="nav-link <?php if(isset($category['children'])) echo 'dropdown-toggle' ?>" href="category/<?= $category['slug'] ?>" <?php if(isset($category['children'])) echo 'data-bs-toggle="dropdown"'?> ><?php __('tpl_computers') ?></a>
    <?php if(isset($category['children'])) : ?>
        <ul class="dropdown-menu" aria-label="navbarDropdown">
            <?= $this->getMenuHtml($category['children']) ?>
        </ul>
    <?php endif ?>
</li>

