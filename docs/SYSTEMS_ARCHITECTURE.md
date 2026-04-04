# Systems Architecture: Clinical OS Rebuild

This document serves as the Technical Source of Truth for the project's "plumbing" and integration layers.

## 1. System Inventory

| System | Name | URL | Role |
| :--- | :--- | :--- | :--- |
| **System A** | Live WordPress | [shaunlacob.com](https://shaunlacob.com) | **READ-ONLY SOURCE**: Used for auditing live structures and content extraction. |
| **System B** | Target Staging | [staging.shaunlacob.xyz](https://staging.shaunlacob.xyz) | **WRITE TARGET**: The deployment destination for the v3 rebuild. |
| **System C** | Version Control | [github.com/shaunacpt/clinical-os-v3-theme](https://github.com/shaunacpt/clinical-os-v3-theme) | **SYNC HUB**: Central repository for theme logic and design DNA. |
| **System D** | Knowledge Hub | NotebookLM | **RESEARCH PARTNER**: Stores project specifications and mastery guides. |

## 2. Integration Pathways

### Local-to-GitHub (C)
- **Method**: Standard Git protocol.
- **Authentication**: GitHub Personal Access Token (PAT).
- **Target Branch**: `main`

### GitHub (C)-to-Staging (B)
- **Method**: Automated Webhook (Hostinger Auto-Deployment).
- **Trigger**: Every `push` to the `main` branch.
- **Payload URL**: `https://webhooks.hostinger.com/deploy/8fc8f2aa2156768c09c5dff43ef80d46`

## 3. DNA Enforcement (Theme Logic)

The following core rules are enforced via `clinical-os-child` theme:
1. **800px Clinical Reading Rule**: Enforced globally on all content containers via CSS and PHP filters.
2. **Navy/Teal Design System**: Standardized color tokens and typography to match the v3 brand style.
3. **RTL Parity**: Full Hebrew support with specific fixes for Astra Pro header alignment.

---
*Created: 2026-04-04*
*Last Audit Status: 100% Connectivity Health*
