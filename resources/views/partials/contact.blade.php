<!-- ==========================================
     CONTACT US — "Let's talk"
=========================================== -->

<section class="contact-section" id="contact-us">
<div class="contact-wrapper">

    <!-- LEFT: info panel -->
    <div class="contact-info">

        <h2 class="contact-headline">Let's talk</h2>

        <div class="contact-block">
            <p class="contact-block-label">Head office</p>
            <p class="contact-block-detail">
                <span class="contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                Bole Atlas, Cape Verde Street, in front of the
                European Union, Noah Diplomat Building, 13th floor,
                Addis Ababa, Ethiopia
            </p>
        </div>

        <div class="contact-block">
            <p class="contact-block-label">Email</p>
            <p class="contact-block-detail">
                <span class="contact-icon"><i class="fa-regular fa-envelope"></i></span>
                <a href="mailto:info@rominaplc.com">info@rominaplc.com</a>
            </p>
        </div>

        <div class="contact-block">
            <p class="contact-block-label">Divisions</p>

            <div class="contact-divisions">

                <div class="contact-division-row">
                    <span class="contact-division-name">KOBA</span>
                    <span class="contact-division-phone">+251 900 989 898</span>
                </div>

                <div class="contact-division-row">
                    <span class="contact-division-name">Meskott</span>
                    <span class="contact-division-phone">+251 90 387 9999</span>
                </div>

                <div class="contact-division-row">
                    <span class="contact-division-name">Romina Imports</span>
                    <span class="contact-division-phone">0116 669 100</span>
                </div>

                <div class="contact-division-row">
                    <span class="contact-division-name">Jaquar World</span>
                    <span class="contact-division-phone">+251 944 143 073</span>
                </div>

            </div>
        </div>

    </div>

    <!-- RIGHT: contact form -->
    <div class="contact-form-wrap">

        <form class="contact-form" action="#" method="POST">
            @csrf

            <div class="contact-form-row">
                <div class="contact-field">
                    <label for="contact_name">Name</label>
                    <input type="text" id="contact_name" name="name" autocomplete="name">
                </div>
                <div class="contact-field">
                    <label for="contact_email">Email</label>
                    <input type="email" id="contact_email" name="email" autocomplete="email">
                </div>
            </div>

            <div class="contact-form-row">
                <div class="contact-field">
                    <label for="contact_phone">Phone</label>
                    <input type="tel" id="contact_phone" name="phone" autocomplete="tel">
                </div>
                <div class="contact-field">
                    <label for="contact_subject">Subject</label>
                    <input type="text" id="contact_subject" name="subject">
                </div>
            </div>

            <div class="contact-field contact-field-full">
                <label for="contact_message">Message</label>
                <textarea id="contact_message" name="message" rows="6"></textarea>
            </div>

            <div class="contact-form-submit">
                <button type="submit" class="contact-send-btn">
                    Send message
                </button>
            </div>

        </form>

    </div>

</div>
</section>

<style>
/* ============================================================
   CONTACT SECTION
============================================================ */
.contact-section {
    background: #fff;
}

.contact-wrapper {
    display: flex;
    min-height: 500px;
}

/* ---- LEFT PANEL ---- */
.contact-info {
    width: 48%;
    flex-shrink: 0;
    background: #0f1f3d;
    padding: 72px 56px;
    display: flex;
    flex-direction: column;
    gap: 32px;
}

.contact-headline {
    font-size: clamp(2.8rem, 5vw, 4rem);
    font-weight: 800;
    color: #fff;
    letter-spacing: -0.03em;
    line-height: 1;
    margin: 0 0 8px;
}

.contact-block {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.contact-block-label {
    font-size: 12px;
    font-weight: 700;
    color: #8fa0bf;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin: 0;
}

.contact-block-detail {
    font-size: 14px;
    color: #cdd8ec;
    line-height: 1.6;
    margin: 0;
    display: flex;
    gap: 10px;
    align-items: flex-start;
}

.contact-block-detail a {
    color: #e05252;
    text-decoration: none;
    transition: opacity 0.2s;
}

.contact-block-detail a:hover {
    opacity: 0.8;
    text-decoration: underline;
}

.contact-icon {
    color: #e05252;
    font-size: 14px;
    flex-shrink: 0;
    margin-top: 2px;
}

/* DIVISIONS TABLE */
.contact-divisions {
    display: flex;
    flex-direction: column;
    border-top: 1px solid rgba(255,255,255,0.1);
}

.contact-division-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 11px 0;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

.contact-division-name {
    font-size: 13.5px;
    color: #cdd8ec;
}

.contact-division-phone {
    font-size: 13.5px;
    font-weight: 600;
    color: #e05252;
    letter-spacing: 0.02em;
}

/* ---- RIGHT PANEL ---- */
.contact-form-wrap {
    flex: 1;
    background: #fff;
    padding: 72px 56px;
    display: flex;
    align-items: flex-start;
}

.contact-form {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 28px;
}

.contact-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
}

.contact-field {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.contact-field-full {
    grid-column: 1 / -1;
}

.contact-field label {
    font-size: 12px;
    font-weight: 600;
    color: #e05252;
    letter-spacing: 0.04em;
}

.contact-field input,
.contact-field textarea {
    background: transparent;
    border: none;
    border-bottom: 1px solid #c8c8c8;
    outline: none;
    font-size: 14px;
    color: #1a1a1a;
    padding: 8px 0;
    font-family: inherit;
    transition: border-color 0.2s;
    resize: none;
}

.contact-field input:focus,
.contact-field textarea:focus {
    border-bottom-color: #0f1f3d;
}

.contact-field input::placeholder,
.contact-field textarea::placeholder {
    color: #bbb;
}

/* SUBMIT */
.contact-form-submit {
    margin-top: 4px;
}

.contact-send-btn {
    background: #e05252;
    color: #fff;
    border: none;
    padding: 14px 36px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.02em;
    cursor: pointer;
    border-radius: 4px;
    transition: background 0.2s, transform 0.15s;
}

.contact-send-btn:hover {
    background: #c23e3e;
    transform: translateY(-1px);
}

.contact-send-btn:active {
    transform: translateY(0);
}

/* ---- RESPONSIVE ---- */
@media (max-width: 900px) {
    .contact-wrapper {
        flex-direction: column;
    }

    .contact-info {
        width: 100%;
        padding: 56px 32px;
    }

    .contact-form-wrap {
        padding: 56px 32px;
    }
}

@media (max-width: 600px) {
    .contact-info { padding: 48px 24px; }
    .contact-form-wrap { padding: 48px 24px; }

    .contact-form-row {
        grid-template-columns: 1fr;
        gap: 24px;
    }
}
</style>
