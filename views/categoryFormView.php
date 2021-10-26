<div class="container">
    <div class="row text-center">

        <form class="form row" action="<?php echo ($actionForm) ?>" method="post">
            <p>
                <label for="title">Titre</label>
                <input type="text" id="title" name="title"
                       value="<?php if (!empty($oCategories) and !empty($oCategories->getTitle())): echo $oCategories->getTitle(); endif; ?>"/>
            </p>
            <p>
                <label for="description">Description</label>
                <input type="text" id="description" name="description"
                       value="<?php if (!empty($oCategories) and !empty($oCategories->getDescription())): echo $oCategories->getDescription(); endif; ?>"/>
            </p>
            <p>
                <label for="picture">Image</label>
                <textarea type="text" id="picture"
                          name="picture"><?php if (!empty($oCategories) and !empty($oCategories->getPicture())): echo ($oCategories->getPicture()); endif; ?></textarea>
            </p>
            <p>
                <label for="parent">Parent</label>
                <input type="text" id="parent" name="parent"
                       value="<?php if (!empty($oCategories) and !empty($oCategories->getParent())): echo $oCategories->getParent(); endif; ?>"/>
            </p>
            <p>
                <?php
                if (isset($aParamsURL[2]) and $aParamsURL[2] >= 0):
                    ?>
                    <input type="hidden" value="<?php echo $aParamsURL[2]; ?>" id="id" name="id"/>
                <?php
                endif;
                ?>
                <input type="submit" class="btn btn-secondary" value="valider" id="valider" name="valider"/>
                <a type ="button" class="btn btn-secondary " href="/categorylist/">Annuler </a>
            </p>
        </form>
    </div>
</div>