<div class="sidebar">
    <h2><?= t('Actions') ?></h2>
    <ul>
        <li>
            <a href="?controller=project&amp;action=show&amp;project_id=<?= $project['id'] ?>"><?= t('Summary') ?></a>
        </li>

        <?php if (Helper\is_admin() || $project['is_private']): ?>
        <li>
            <a href="?controller=project&amp;action=share&amp;project_id=<?= $project['id'] ?>"><?= t('Public access') ?></a>
        </li>
        <li>
            <a href="?controller=project&amp;action=edit&amp;project_id=<?= $project['id'] ?>"><?= t('Edit project') ?></a>
        </li>
        <li>
            <a href="?controller=board&amp;action=edit&amp;project_id=<?= $project['id'] ?>"><?= t('Edit board') ?></a>
        </li>
        <li>
            <a href="?controller=category&amp;action=index&amp;project_id=<?= $project['id'] ?>"><?= t('Category management') ?></a>
        </li>
        <?php if (Helper\is_admin()): ?>
            <li>
                <a href="?controller=project&amp;action=users&amp;project_id=<?= $project['id'] ?>"><?= t('User management') ?></a>
            </li>
        <?php endif ?>
        <li>
            <a href="?controller=action&amp;action=index&amp;project_id=<?= $project['id'] ?>"><?= t('Automatic actions') ?></a>
        </li>
        <li>
            <a href="?controller=project&amp;action=duplicate&amp;project_id=<?= $project['id'].Helper\param_csrf() ?>"><?= t('Duplicate') ?></a>
        </li>
        <li>
            <?php if ($project['is_active']): ?>
                <a href="?controller=project&amp;action=disable&amp;project_id=<?= $project['id'].Helper\param_csrf() ?>"><?= t('Disable') ?></a>
            <?php else: ?>
                <a href="?controller=project&amp;action=enable&amp;project_id=<?= $project['id'].Helper\param_csrf() ?>"><?= t('Enable') ?></a>
            <?php endif ?>
        </li>
        <li>
            <a href="?controller=project&amp;action=remove&amp;project_id=<?= $project['id'] ?>"><?= t('Remove') ?></a>
        </li>
        <?php endif ?>
    </ul>

    <?php if (Helper\is_admin() || $project['is_private']): ?>
    <h2><?= t('Exports') ?></h2>
    <ul>
        <li>
            <?= Helper\a(t('Tasks'), 'project', 'exportTasks', array('project_id' => $project['id'])) ?>
        </li>
        <li>
            <?= Helper\a(t('Daily project summary'), 'project', 'exportDailyProjectSummary', array('project_id' => $project['id'])) ?>
        </li>
    </li>
    <?php endif ?>
</div>