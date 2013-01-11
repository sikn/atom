<div class="row">

  <div class="span3">

    <div id="left-column">

      <div class="logo">
        <?php if (file_exists(sfConfig::get('sf_upload_dir').'/r/'.$resource->slug.'/conf/logo.png')): ?>
          <?php echo image_tag('/uploads/r/'.$resource->slug.'/conf/logo.png') ?>
        <?php else: ?>
          <h2><?php echo render_title($resource) ?></h2>
        <?php endif; ?>
      </div>

      <?php include_component('repository', 'contextMenu') ?>

    </div>

  </div>

  <div class="span9">

    <div id="main-column">

      <?php echo $form->renderGlobalErrors() ?>

      <?php echo $form->renderFormTag(url_for(array($resource, 'module' => 'repository', 'action' => 'editTheme')), array('class' => 'form-horizontal')) ?>

        <h1><?php echo render_title($resource) ?></h1>

        <ul class="breadcrumb">
          <li><?php echo link_to(__('Institutions'), array('module' => 'repository', 'action' => 'browse')) ?></li>
          <li><?php echo link_to(render_title($resource), array($resource, 'module' => 'repository')) ?></li>
          <li><span><?php echo __('Edit theme') ?></span></li>
        </ul>

        <div id="content">

          <fieldset class="collapsible" id="styleArea">

            <legend><?php echo __('Style') ?></legend>

            <div class="control-group">
              <label class="control-label" for="html"><?php echo __('Background color') ?></label>
              <div class="controls">
                <?php echo $form->backgroundColor ?>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="html"><?php echo __('Banner') ?></label>
              <div class="controls">
                <?php echo $form->banner ?>
                <span class="help-block"><?php echo __('Requirements: PNG format, 256K max. size. Recommended dimensions of %1%x%2%px, it will be cropped if ImageMagick is installed.', array('%1%' => arRepositoryThemeCropValidatedFile::BANNER_MAX_WIDTH, '%2%' => arRepositoryThemeCropValidatedFile::BANNER_MAX_HEIGHT)) ?></span>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="html"><?php echo __('Logo') ?></label>
              <div class="controls">
                <?php echo $form->logo ?>
                <span class="help-block"><?php echo __('Requirements: PNG format, 256K max. size. Recommended dimensions of %1%x%2%px, it will be cropped if ImageMagick is installed.', array('%1%' => arRepositoryThemeCropValidatedFile::LOGO_MAX_WIDTH, '%2%' => arRepositoryThemeCropValidatedFile::LOGO_MAX_HEIGHT)) ?></span>
              </div>
            </div>

          </fieldset>

          <fieldset class="collapsible" id="pageContentArea">

            <legend><?php echo __('Page content') ?></legend>

            <div class="control-group">
              <label class="control-label" for="html"><?php echo __('HTML snippet') ?></label>
              <div class="controls">
                <?php echo $form->htmlSnippet ?>
              </div>
            </div>

          </fieldset>

        </div>

        <section class="actions">
          <ul>
            <li><input class="c-btn c-btn-submit" type="submit" value="<?php echo __('Save') ?>"/></li>
            <li><?php echo link_to(__('Cancel'), array($resource, 'module' => 'repository'), array('class' => 'c-btn', 'title' => __('Edit'))) ?></li>
          </ul>
        </section>

      </form>

    </div>

  </div>

</div>