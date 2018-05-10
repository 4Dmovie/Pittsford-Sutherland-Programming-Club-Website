//SPFA algorithm
#include <bits/stdc++.h>
const int INF = ~0U>>1;
const int MAXN = 100002;
using namespace std;
int N, M, num;
int START, END;
int f[MAXN], t[MAXN], w[MAXN], first[MAXN], nex[MAXN], dist[MAXN], vis[MAXN];
void add(int from, int to, int weight) {
	f[++num] = from, t[num] = to, w[num] = weight;
	nex[num] = first[from], first[from] = num;
}
queue <int> q;
int spfa(int start, int end) {
	for(int i = 1; i <= N; ++i) dist[i] = (i == start) ? 0 : INF;
	q.push(start);
	vis[start] = 1;
	while(!q.empty()) {
		int k = q.front();
		q.pop();
		vis[k] = 0;
		for(int i = first[k]; i != 0; i = nex[i]) {
			if(dist[k] + w[i] < dist[t[i]]) {
				dist[t[i]] = dist[k] + w[i];
				if(!vis[dist[t[i]]]) {
					vis[t[i]] = 1;
					q.push(t[i]);
				}
			}
		}
	}
	return dist[end];
}
int main(){
	scanf("%d%d%d%d", &N, &M, &START, &END);
	for(int i = 1; i <= M; ++i) {
		int x, y, z;
		scanf("%d%d%d", &x, &y, &z);
		add(x, y, z);
		add(y, x, z);
	}
	printf("%d\n", spfa(START, END));
return 0;
}

