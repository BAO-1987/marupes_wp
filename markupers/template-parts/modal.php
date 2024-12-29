<?php
/*
Template Name: Modal
*/
?>


<?php
$chosen_form = get_field('select_form', get_queried_object_id());
$modal_form = get_field('select_modal', get_queried_object_id());
?> 

<div class="modals"> 

        <dialog class="modal modal--start">
            <h2 class="title modal__title">
              <?php echo get_the_title($modal_form); ?>
            </h2>

            <button class="modal__close" type="button" data-modal-close="">
                <span class="sr-only">close modal</span>
            </button>

                <form class="form form--modal" action="#">
                    <div class="form__inner">
                        <label class="form__label">
                            <input class="form__input" type="text" name="user-name"
                                   placeholder="<?php echo get_field('placeholder_name', $chosen_form); ?>" required="">
                        </label>

                        <label class="form__label">
                            <input class="form__input" name="user-phone"
                                   placeholder="<?php echo get_field('placeholder_phone', $chosen_form); ?>"
                                   inputmode="tel"
                                   type="tel" required="">
                        </label>

                        <label class="form__label form__label--textarea">
                                <textarea class="form__input form__input--textarea"
                                          placeholder="<?php echo get_field('placeholder_message', $chosen_form); ?>"
                                          name="user-message" rows="2"></textarea>
                        </label>

                        <span class="form__label form__label--necessarily"> – necessarily</span>

                        <p class="form__privacy">
                            <?php echo get_field('consent_text', $chosen_form); ?>
                        </p>

                        <button class="btn btn--form form__btn" type="submit">
                            <?php echo get_field('button_text', $chosen_form); ?>
                        </button>
                    </div>
                </form>
        </dialog>

        <dialog class="modal modal--finish">

            <button class="modal__close" type="button">
                <span class="sr-only">close modal</span>
            </button>

            <h2 class="title modal__title">
              <?php echo get_field('modal_subtitle', $modal_form); ?>
            </h2>

            <p>
              <?php echo get_field('modal_text', $modal_form); ?>
            </p>

            <button class="btn btn--transparent modal__close" type="button">
                <span class="sr-only">close modal</span>
                ok
            </button>

        </dialog>
    </div>

</div>