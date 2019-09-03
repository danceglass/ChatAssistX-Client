{
	"config": {
		"preset": "default",
		"theme": "rct2",
		"allowExternalSource": false,
		"allowEmoticon": true,
		"ignoreMQEmoticon": true,
		"ignoreNickname": "(무시할닉네임 ,로 구분해서 입력)",
		"enableTwitchEmoticon": true,
		"TwitchEmoticonsize": "1.0",
		"streamer": {
			"twitch": "(다형하기)",
			"kakaopot": "(카카오닉네임)",
			"youtube": "(유튜브채널명)"
		},
		"chat": {
			"platformIcon": true,
			"platform": "all",
			"animation": "fade",
			"chatFade": 0,
			"font": "Jeju Gothic",
			"fontUsernameSize": 14,
			"fontUsernameColor": "255, 255, 255",
			"fontChatSize": 16,
			"fontChatColor": "255, 255, 255",
			"backgroundColor": "255, 255, 255",
			"backgroundAlpha": 0,
			"chatBackgroundColor": "200, 200, 200",
			"chatBackgroundAlpha": 25
		},
		"themes": {
			"rct2": {
    "css": [
        "https://cdn.rawgit.com/Lastorder-DC/70a199ad49d5bd2e23ec005e56b1cf70/raw/0c7818bd0530b3f1ed172594cfb5c4db98b99bac/rct2.css"
    ],
    "js": [],
    "image": {
        "streamer": "http://funzinnu.cafe24.com/stream/cdn/b_broadcaster.png",
        "moderator": ""
				}
			}
		}
	},
	"plugins": {
		"command": {
			"use": false
		},
		"dccon": {
			"use": true,
			"config": {
				"address": "https://lastorder-dc.github.io/ChatAssistX-Client/dccon.json",
				"twitch": "https://cdn.rawgit.com/Lastorder-DC/dccon/v180125/global.json",
				"twitch_sub": "https://cdn.rawgit.com/Lastorder-DC/dccon/v180125/sub.json"
			}
		},
		"style": {
			"use": true
		},
		"replace" : {
			"use": true,
			"config": {
				"replace_list": {
					"바꿀말1": "바꿔질말1",
					"바꿀말2": "바꿔질말2"
				}
			}
		},
		"block" : {
			"use": true,
			"config": {
				"block_list": {
					"나쁜말1": "keyword",
					"나쁜닉네임1": "nickname",
					"나쁜말2": "keyword",
					"나쁜닉네임2": "nickname"
				}
			}
		}
	},
	"provider": {
		"JSAssist": {
			"use": true,
			"config": {
				"oauth": "",
				"do_not_use_tapic": false,
				"do_not_use_jsassist": true,
				"channelname": "dodahyeong"
			}
		},
		"mixer": {
			"use": false,
			"config": {
				"channelid": 164900
			}
		}
	}
}
