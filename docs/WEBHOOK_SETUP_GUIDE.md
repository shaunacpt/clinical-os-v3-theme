# Webhook Setup & Recovery Guide

This guide documents the process for re-establishing the auto-deployment sync between GitHub and Hostinger.

## 1. Webhook Configuration Details

- **Payload URL**: `https://webhooks.hostinger.com/deploy/8fc8f2aa2156768c09c5dff43ef80d46`
- **Content Type**: `application/json`
- **Secret**: *(Leave Empty)*
- **SSL Verification**: Enabled
- **Trigger Events**: `push`

## 2. The "404 - Permission Denied" Gotcha

**Critically important for multiple account holders:**
If you attempt to access the webhook settings page (`/settings/hooks`) and receive a 404 error, it is almost certainly because the browser is logged into the wrong account.

- **Repo Owner**: `shaunacpt`
- **Other Account**: `ShaunLacob` (Collaborator - but often lacks full admin rights for webhooks)

**Resolution**: You MUST be logged in as `shaunacpt` in the browser to manage these settings.

## 3. Setup Process (Step-by-Step)

1. Log into GitHub as **`shaunacpt`**.
2. Navigate to: `Settings > Code and automation > Webhooks`.
3. Click **Add webhook**.
4. Enter the Payload URL provided in Section 1.
5. Select `application/json` from the Content type dropdown.
6. Click **Add webhook**.
7. **Verification**: Look for a green checkmark/tick next to the URL. A successful "ping" payload should deliver almost immediately.

## 4. Verification Test

To verify the "plumbing" end-to-end, perform a small local edit (e.g., updating a comment timestamp in `style.css`) and push:

```bash
git add .
git commit -m "test: webhook verify"
git push origin main
```

Confirm that the staging site updates accordingly within ~10-20 seconds.
