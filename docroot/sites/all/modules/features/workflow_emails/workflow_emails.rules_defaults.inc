<?php
/**
 * @file
 * workflow_emails.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function workflow_emails_default_rules_configuration() {
  $items = array();
  $items['rules_email_approval_group'] = entity_import('rules_config', '{ "rules_email_approval_group" : {
      "LABEL" : "Email approval group",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "workbench_moderation", "rules" ],
      "ON" : { "workbench_moderation_after_moderation_transition" : [] },
      "IF" : [
        { "contents_previous_state" : { "node" : [ "node" ], "moderation_state" : "draft" } },
        { "contents_current_state" : { "node" : [ "node" ], "moderation_state" : "needs_review" } }
      ],
      "DO" : [
        { "mail_to_users_of_role" : {
            "roles" : { "value" : { "5" : "5" } },
            "subject" : "New content item needs approval on [site:name] [SEC=UNCLASSIFIED]",
            "message" : "A new content item requires approval on [site:name] ([site:url-brief]).\\r\\n\\r\\nContent type: [node:content-type]\\r\\nTitle: [node:title]\\r\\nURL: [node:url]\\r\\nUpdated on: [node:changed]\\r\\nCurrent moderation state: [new-state:value]\\r\\nPrevious moderation state: [previous-state:value]\\r\\n\\r\\nPlease enure you are logged into the site at [site:login-url] before moderating the page.\\r\\n\\r\\nFor all assistance with this website, please email web.development@industry.gov.au or log a job through Corporater Services (http:\\/\\/corporateservices.zendesk.com).\\r\\n"
          }
        }
      ]
    }
  }');
  $items['rules_email_author_on_approval'] = entity_import('rules_config', '{ "rules_email_author_on_approval" : {
      "LABEL" : "Email author on approval",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "workbench_moderation", "rules" ],
      "ON" : { "workbench_moderation_after_moderation_transition" : [] },
      "IF" : [
        { "contents_previous_state" : { "node" : [ "node" ], "moderation_state" : "needs_review" } },
        { "contents_current_state" : { "node" : [ "node" ], "moderation_state" : "published" } },
        { "entity_has_field" : { "entity" : [ "node" ], "field" : "field_tags" } }
      ],
      "DO" : [
        { "mail" : {
            "to" : [ "node:author:mail" ],
            "subject" : "Your content item has been approved [SEC=UNCLASSIFIED]",
            "message" : "Hi [node:author],\\r\\n\\r\\n[node:title] ([node:url]) has been approved and is now available online.\\r\\n\\r\\nCheers,\\r\\n[site:name]\\r\\n\\r\\nFor all assistance with [site:url], please email [site:mail] or log a job on Corporate Services (http:\\/\\/corporateservices.zendesk.com).",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  $items['rules_email_author_on_rejection'] = entity_import('rules_config', '{ "rules_email_author_on_rejection" : {
      "LABEL" : "Email author on rejection",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "workbench_moderation", "rules" ],
      "ON" : { "workbench_moderation_after_moderation_transition" : [] },
      "IF" : [
        { "contents_previous_state" : { "node" : [ "node" ], "moderation_state" : "needs_review" } },
        { "contents_current_state" : { "node" : [ "node" ], "moderation_state" : "draft" } }
      ],
      "DO" : [
        { "mail" : {
            "to" : [ "node:author:mail" ],
            "subject" : "Your content item has been rejected [SEC=UNCLASSIFIED]",
            "message" : "Hi [node:author],\\r\\n\\r\\nThe moderation state of [node:title] ([node:url]) has been set back to [new-state:value] and action is required by you.\\r\\n\\r\\nPlease visit the Edit view ([node:edit-url]) to check the revision notes and make any changes.\\r\\n\\r\\nCheers,\\r\\n[site:name]\\r\\n\\r\\nFor all assistance with [site:url], please email [site:mail] or log a job on Corporate Services (http:\\/\\/corporateservices.zendesk.com).",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
